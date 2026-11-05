# 01 — Front Controller, Autoloading (PSR-4), Roteamento e Middlewares

Voltar para o [Índice de PHP MVC](README.md)

---

## 1. O Padrão Front Controller (`public/index.php`)

O **Front Controller** centraliza todas as requisições HTTP da aplicação em um único arquivo: `public/index.php`.

### Benefícios Diretos
1. **Segurança por Isolamento:** Os arquivos de negócio (`app/`), templates (`resources/views/`), configurações (`config/`) e credenciais (`.env`) ficam **um nível acima** do diretório público (`public/`), tornando impossível seu acesso direto pelo navegador.
2. **Bootstrap Unificado:** Tratamento de erros, configuração de timezone, cabeçalhos de segurança, sessão e autoloader são carregados em um único ponto.
3. **URLs Limpas e Semânticas (RESTful):** Substitui `/ver_usuario.php?id=15&acao=editar` por `/usuarios/15/editar`.

---

## 2. Configuração do Servidor Web para o Front Controller

Para que qualquer URL amigável seja encaminhada ao `public/index.php`, configure o servidor web:

### A. Nginx (`nginx.conf` — Recomendado para Produção)
```nginx
server {
    listen 80;
    server_name app.exemplo.com.br;

    # O root aponta ESTRITAMENTE para a pasta public/
    root /var/www/meu-projeto-mvc/public;
    index index.php;

    # Encaminha qualquer rota que não seja um arquivo estático real para index.php
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/run/php/php8.4-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
    }

    # Bloqueia acesso a arquivos ocultos (.htaccess, .env, .git)
    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```
*(Consulte também os guias detalhados de servidores em [`../servers/nginx-server/`](../servers/nginx-server/) e [`../servers/apache-server/`](../servers/apache-server/).)*

### B. Apache (`public/.htaccess`)
```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Preserva o cabeçalho Authorization (necessário para JWT / Bearer Tokens)
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Se não for um diretório nem um arquivo estático existente (CSS, JS, PNG), envia para index.php
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

### C. Servidor Embutido do PHP (Desenvolvimento Local)
```bash
php -S localhost:8000 -t public
```

---

## 3. Autoloading com Composer (PSR-4)

Jamais utilize dezenas de `require_once '../../models/User.php'` espalhados pelos arquivos. Configure o **PSR-4** no seu `composer.json`:

```json
{
    "name": "empresa/meu-projeto-mvc",
    "description": "Arquitetura MVC em PHP",
    "type": "project",
    "require": {
        "php": ">=7.4"
    },
    "autoload": {
        "psr-4": {
            "App\\": "app/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "config": {
        "optimize-autoloader": true,
        "sort-packages": true
    }
}
```

Gere o mapa de autoload executando:
```bash
composer dump-autoload -o
```

Com isso, a classe `App\Controllers\UserController` localizada em `app/Controllers/UserController.php` será carregada automaticamente no instante em que for referenciada.

---

## 4. Implementando o Container de Injeção de Dependências (Auto-Wiring)

Um bom MVC não instancia dependências manualmente dentro dos Controllers (`new PdoUserRepository(new PDO(...))`). Abaixo está um **Container DI leve com Auto-Wiring via Reflection**, compatível do **PHP 8.0 ao 8.5** (e facilmente adaptável ao PHP 7.4):

```php
<?php

declare(strict_types=1);

namespace App\Http;

use Closure;
use ReflectionClass;
use ReflectionNamedType;
use RuntimeException;

final class Container
{
    /** @var array<string, Closure|object> */
    private array $bindings = [];

    /** @var array<string, object> */
    private array $singletons = [];

    public function bind(string $abstract, Closure $factory): void
    {
        $this->bindings[$abstract] = $factory;
    }

    public function singleton(string $abstract, Closure $factory): void
    {
        $this->bindings[$abstract] = function (self $c) use ($abstract, $factory): object {
            if (!isset($this->singletons[$abstract])) {
                $this->singletons[$abstract] = $factory($c);
            }
            return $this->singletons[$abstract];
        };
    }

    /**
     * Resolve uma classe ou interface automaticamente via Reflection (Auto-Wiring).
     * @template T of object
     * @param class-string<T> $id
     * @return T
     */
    public function get(string $id): object
    {
        if (isset($this->bindings[$id])) {
            $concrete = $this->bindings[$id];
            return $concrete instanceof Closure ? $concrete($this) : $concrete;
        }

        $reflector = new ReflectionClass($id);
        if (!$reflector->isInstantiable()) {
            throw new RuntimeException("A classe ou interface [{$id}] não pode ser instanciada diretamente sem um binding registrado.");
        }

        $constructor = $reflector->getConstructor();
        if ($constructor === null) {
            return new $id();
        }

        $dependencies = [];
        foreach ($constructor->getParameters() as $param) {
            $type = $param->getType();
            if (!$type instanceof ReflectionNamedType || $type->isBuiltin()) {
                if ($param->isDefaultValueAvailable()) {
                    $dependencies[] = $param->getDefaultValue();
                    continue;
                }
                throw new RuntimeException("Não foi possível resolver o parâmetro primitivo [\${$param->getName()}] em [{$id}].");
            }

            /** @var class-string $dependencyClass */
            $dependencyClass = $type->getName();
            $dependencies[] = $this->get($dependencyClass);
        }

        return $reflector->newInstanceArgs($dependencies);
    }
}
```

---

## 5. Implementando o Router e Pipeline de Middlewares

O **Router** recebe a URI e o método HTTP (`GET`, `POST`, `PUT`, `DELETE`), extrai parâmetros dinâmicos (como `{id}`) e executa os **Middlewares** antes de chamar o Controller.

### 5.1. Interface de Middleware (`app/Middlewares/MiddlewareInterface.php`)
```php
<?php

declare(strict_types=1);

namespace App\Middlewares;

use App\Http\Request;
use App\Http\Response;
use Closure;

interface MiddlewareInterface
{
    /**
     * @param Request $request
     * @param Closure(Request): Response $next
     */
    public function handle(Request $request, Closure $next): Response;
}
```

### 5.2. Router com Parâmetros Dinâmicos e Middlewares (`app/Http/Router.php`)
Compatível do **PHP 7.4 ao PHP 8.5**:

```php
<?php

declare(strict_types=1);

namespace App\Http;

use App\Middlewares\MiddlewareInterface;

final class Router
{
    /** @var array<int, array{method: string, pattern: string, regex: string, handler: array{0: class-string, 1: string}, middlewares: array<int, class-string<MiddlewareInterface>>}> */
    private array $routes = [];

    private Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param array{0: class-string, 1: string} $handler
     * @param array<int, class-string<MiddlewareInterface>> $middlewares
     */
    public function add(string $method, string $pattern, array $handler, array $middlewares = []): void
    {
        // Converte /users/{id} em regex com grupo nomeado (?P<id>[^/]+)
        $regex = preg_replace('/\{([a-zA-Z_][a-zA-Z0-9_]*)\}/', '(?P<$1>[^/]+)', $pattern);
        $regex = '#^' . $regex . '$#';

        $this->routes[] = [
            'method'      => strtoupper($method),
            'pattern'     => $pattern,
            'regex'       => $regex,
            'handler'     => $handler,
            'middlewares' => $middlewares,
        ];
    }

    public function get(string $pattern, array $handler, array $middlewares = []): void
    {
        $this->add('GET', $pattern, $handler, $middlewares);
    }

    public function post(string $pattern, array $handler, array $middlewares = []): void
    {
        $this->add('POST', $pattern, $handler, $middlewares);
    }

    public function dispatch(Request $request): Response
    {
        $method = $request->method();
        $uri    = $request->path();

        foreach ($this->routes as $route) {
            if ($route['method'] !== $method) {
                continue;
            }

            if (preg_match($route['regex'], $uri, $matches)) {
                // Filtra apenas os parâmetros nomeados da URL (ex: ['id' => '42'])
                $params = array_filter(
                    $matches,
                    static fn($key): bool => is_string($key),
                    ARRAY_FILTER_USE_KEY
                );
                $request = $request->withRouteParams($params);

                [$controllerClass, $action] = $route['handler'];

                // Núcleo final da pipeline: instanciar o Controller via DI e chamar a Action
                $coreAction = function (Request $req) use ($controllerClass, $action): Response {
                    $controller = $this->container->get($controllerClass);
                    return $controller->{$action}($req);
                };

                // Encadeia os Middlewares em ordem reversa (Onion Architecture)
                $pipeline = array_reduce(
                    array_reverse($route['middlewares']),
                    function ($next, string $middlewareClass) {
                        return function (Request $req) use ($next, $middlewareClass): Response {
                            /** @var MiddlewareInterface $middleware */
                            $middleware = $this->container->get($middlewareClass);
                            return $middleware->handle($req, $next);
                        };
                    },
                    $coreAction
                );

                return $pipeline($request);
            }
        }

        return Response::json(['error' => 'Rota não encontrada (404).'], 404);
    }
}
```

---

## 6. Roteamento Moderno com Attributes (PHP 8.0+)

A partir do **PHP 8.0**, você também pode declarar rotas diretamente acima dos métodos do Controller utilizando **Attributes** nativos (como no Symfony 6/7):

```php
<?php

declare(strict_types=1);

namespace App\Http\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
final class Route
{
    public function __construct(
        public readonly string $path,
        public readonly string $method = 'GET',
        public readonly array $middlewares = []
    ) {}
}
```

E registrar automaticamente no `Router` lendo os atributos via `ReflectionMethod::getAttributes(Route::class)`.

---

## 7. O Arquivo `public/index.php` Completo

Veja como o `public/index.php` fica enxuto, legível e seguro:

```php
<?php

declare(strict_types=1);

use App\Http\Container;
use App\Http\Request;
use App\Http\Response;
use App\Http\Router;
use App\Repositories\PdoUserRepository;
use App\Repositories\UserRepositoryInterface;

require_once dirname(__DIR__) . '/vendor/autoload.php';

// 1. Inicializa o Container de Injeção de Dependências
$container = new Container();

// 2. Registra conexões e contratos (Interfaces -> Implementações concretas)
$container->singleton(PDO::class, static function (): PDO {
    $dsn = $_ENV['DB_DSN'] ?? 'mysql:host=127.0.0.1;dbname=app_mvc;charset=utf8mb4';
    return new PDO($dsn, $_ENV['DB_USER'] ?? 'root', $_ENV['DB_PASS'] ?? '', [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
});

$container->bind(
    UserRepositoryInterface::class,
    static fn(Container $c): UserRepositoryInterface => new PdoUserRepository($c->get(PDO::class))
);

// 3. Inicializa o Router e carrega as rotas definidas em config/routes.php
$router = new Router($container);
$registerRoutes = require dirname(__DIR__) . '/config/routes.php';
$registerRoutes($router);

// 4. Captura a requisição HTTP atual, despacha e emite a resposta
try {
    $request  = Request::fromGlobals();
    $response = $router->dispatch($request);
} catch (Throwable $e) {
    error_log((string) $e);
    $response = Response::html('<h1>500 - Erro Interno do Servidor</h1>', 500);
}

$response->send();
```

---

## Próximo Capítulo

Avance para **[02 — Camada Controller (`C`): Orquestração, Request/Response, DTOs e Validação](02-controllers-requests-validation.md)**.

