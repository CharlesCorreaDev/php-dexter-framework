# 02 — Camada Controller (`C`): Orquestração, Request/Response, DTOs e Validação

Voltar para o [Índice de PHP MVC](README.md) | Anterior: [01 — Front Controller e Roteamento](01-front-controller-routing-psr.md)

---

## 1. O Papel Real do Controller ("Skinny Controller")

O **Controller** é um **coordenador de tráfego HTTP**. Ele conecta o mundo externo (protocolo HTTP) ao mundo interno da aplicação (Domínio / Model) e escolhe qual View ou resposta devolver.

### Checklist de um Controller Limpo
Um método de Controller bem projetado possui entre **5 e 20 linhas** e executa apenas 4 passos:
1. **Extrair e validar** os dados da `Request` (preferencialmente convertendo-os em um **DTO** tipado).
2. **Invocar** um método da camada `Service` ou `Model`.
3. **Capturar** possíveis exceções de domínio previstas (ex: `EmailAlreadyExistsException`) para traduzi-las em status HTTP adequados (`422`, `404`, `409`).
4. **Retornar** um objeto `Response` (renderizando uma `View` HTML, emitindo um JSON ou fazendo um redirecionamento HTTP `302`/`303`).

---

## 2. Objetos `Request` e `Response` Desacoplados

Acessar superglobais (`$_GET`, `$_POST`, `$_SERVER`) diretamente dentro do Controller dificulta testes unitários e espalha tratamento de sanitização. Encapsule-as em objetos de valor HTTP:

### 2.1. Classe `Request` (`app/Http/Request.php`)
```php
<?php

declare(strict_types=1);

namespace App\Http;

final class Request
{
    /** @var array<string, mixed> */
    private array $query;

    /** @var array<string, mixed> */
    private array $body;

    /** @var array<string, mixed> */
    private array $server;

    /** @var array<string, string> */
    private array $routeParams = [];

    /**
     * @param array<string, mixed> $query
     * @param array<string, mixed> $body
     * @param array<string, mixed> $server
     */
    public function __construct(array $query, array $body, array $server)
    {
        $this->query  = $query;
        $this->body   = $body;
        $this->server = $server;
    }

    public static function fromGlobals(): self
    {
        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';
        $body = $_POST;

        // Suporte transparente a payloads JSON (application/json)
        if (stripos($contentType, 'application/json') !== false) {
            $raw = file_get_contents('php://input');
            $decoded = is_string($raw) ? json_decode($raw, true) : null;
            if (is_array($decoded)) {
                $body = $decoded;
            }
        }

        return new self($_GET, $body, $_SERVER);
    }

    public function method(): string
    {
        return strtoupper((string) ($this->server['REQUEST_METHOD'] ?? 'GET'));
    }

    public function path(): string
    {
        $uri = (string) ($this->server['REQUEST_URI'] ?? '/');
        $path = parse_url($uri, PHP_URL_PATH);
        $normalized = is_string($path) && $path !== '' ? rtrim($path, '/') : '/';
        return $normalized === '' ? '/' : $normalized;
    }

    /**
     * @param array<string, string> $params
     */
    public function withRouteParams(array $params): self
    {
        $clone = clone $this;
        $clone->routeParams = $params;
        return $clone;
    }

    public function route(string $key, ?string $default = null): ?string
    {
        return $this->routeParams[$key] ?? $default;
    }

    /**
     * @param mixed $default
     * @return mixed
     */
    public function input(string $key, $default = null)
    {
        return $this->body[$key] ?? $this->query[$key] ?? $default;
    }

    /**
     * @return array<string, mixed>
     */
    public function all(): array
    {
        return array_merge($this->query, $this->body);
    }
}
```

### 2.2. Classe `Response` (`app/Http/Response.php`)
```php
<?php

declare(strict_types=1);

namespace App\Http;

final class Response
{
    private string $content;
    private int $statusCode;

    /** @var array<string, string> */
    private array $headers;

    /**
     * @param array<string, string> $headers
     */
    public function __construct(string $content = '', int $statusCode = 200, array $headers = [])
    {
        $this->content    = $content;
        $this->statusCode = $statusCode;
        $this->headers    = $headers;
    }

    public static function html(string $html, int $status = 200): self
    {
        return new self($html, $status, [
            'Content-Type' => 'text/html; charset=UTF-8',
        ]);
    }

    /**
     * @param mixed $data
     */
    public static function json($data, int $status = 200): self
    {
        $payload = (string) json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        return new self($payload, $status, [
            'Content-Type' => 'application/json; charset=UTF-8',
        ]);
    }

    public static function redirect(string $url, int $status = 302): self
    {
        return new self('', $status, ['Location' => $url]);
    }

    public function statusCode(): int
    {
        return $this->statusCode;
    }

    public function content(): string
    {
        return $this->content;
    }

    public function send(): void
    {
        if (!headers_sent()) {
            http_response_code($this->statusCode);
            foreach ($this->headers as $name => $value) {
                header("{$name}: {$value}");
            }
        }
        echo $this->content;
    }
}
```

---

## 3. Data Transfer Objects (DTOs) e Validação de Entrada

Em vez de passar arrays associativos soltos (`array $data`) do Controller para o Service, valide os dados na fronteira HTTP e construa um **DTO (Data Transfer Object)** fortemente tipado.

### 3.1. DTO no PHP 8.2+ (`readonly class`)
```php
<?php

declare(strict_types=1);

namespace App\DTOs;

use App\Http\Request;
use InvalidArgumentException;

final readonly class CreateUserDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $plainPassword
    ) {}

    public static function fromRequest(Request $request): self
    {
        $name     = trim((string) $request->input('name', ''));
        $email    = strtolower(trim((string) $request->input('email', '')));
        $password = (string) $request->input('password', '');

        $errors = [];

        if (mb_strlen($name) < 3) {
            $errors['name'] = 'O nome deve possuir pelo menos 3 caracteres.';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Informe um endereço de e-mail válido.';
        }

        if (strlen($password) < 8) {
            $errors['password'] = 'A senha deve possuir no mínimo 8 caracteres.';
        }

        if ($errors !== []) {
            throw new InvalidArgumentException((string) json_encode($errors, JSON_UNESCAPED_UNICODE));
        }

        return new self($name, $email, $password);
    }
}
```

### 3.2. Equivalente Compatível com PHP 7.4
No **PHP 7.4** (onde ainda não existiam `readonly` nem *Constructor Property Promotion*), o mesmo DTO é escrito com propriedades tipadas privadas e *getters*:

```php
<?php

declare(strict_types=1);

namespace App\DTOs;

final class CreateUserDTOPhp74
{
    private string $name;
    private string $email;
    private string $plainPassword;

    public function __construct(string $name, string $email, string $plainPassword)
    {
        $this->name          = $name;
        $this->email         = $email;
        $this->plainPassword = $plainPassword;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPlainPassword(): string
    {
        return $this->plainPassword;
    }
}
```

---

## 4. Exemplo Completo de um Controller MVC (`UserController.php`)

Observe como o `UserController` recebe `UserService` e `ViewRenderer` por **Injeção de Dependência no Construtor** e permanece enxuto e testável:

```php
<?php

declare(strict_types=1);

namespace App\Controllers;

use App\DTOs\CreateUserDTO;
use App\Exceptions\DomainException;
use App\Http\Request;
use App\Http\Response;
use App\Services\UserService;
use App\Views\ViewRenderer;
use InvalidArgumentException;

final class UserController
{
    private UserService $userService;
    private ViewRenderer $view;

    public function __construct(UserService $userService, ViewRenderer $view)
    {
        $this->userService = $userService;
        $this->view        = $view;
    }

    /**
     * GET /users — Lista todos os usuários ativos
     */
    public function index(Request $request): Response
    {
        $users = $this->userService->listActiveUsers();

        $html = $this->view->render('users/index', [
            'title' => 'Usuários Cadastrados',
            'users' => $users,
        ]);

        return Response::html($html);
    }

    /**
     * GET /users/{id} — Exibe o perfil de um usuário específico
     */
    public function show(Request $request): Response
    {
        $id = (int) $request->route('id', '0');
        $user = $this->userService->findById($id);

        if ($user === null) {
            return Response::html(
                $this->view->render('errors/404', ['message' => 'Usuário não encontrado.']),
                404
            );
        }

        return Response::html($this->view->render('users/show', [
            'title' => 'Perfil de ' . $user->name(),
            'user'  => $user,
        ]));
    }

    /**
     * POST /users — Registra um novo usuário
     */
    public function store(Request $request): Response
    {
        try {
            $dto  = CreateUserDTO::fromRequest($request);
            $user = $this->userService->register($dto);

            return Response::redirect('/users/' . $user->id(), 303);
        } catch (InvalidArgumentException $e) {
            return Response::json([
                'status' => 'validation_error',
                'errors' => json_decode($e->getMessage(), true),
            ], 422);
        } catch (DomainException $e) {
            return Response::json([
                'status'  => 'domain_error',
                'message' => $e->getMessage(),
            ], 409);
        }
    }
}
```

---

## 5. Single-Action Controllers (`__invoke`) e o Padrão ADR

Quando um Controller começa a acumular mais de 5 ou 6 métodos (`index`, `create`, `store`, `show`, `edit`, `update`, `destroy`, `exportPdf`, `verifyEmail`), ele frequentemente passa a receber dependências no construtor que são usadas por apenas 1 dos métodos.

A solução moderna (muito adotada no Laravel, Symfony e no padrão **ADR — Action-Domain-Responder**) é criar **Controllers de Ação Única** usando o método mágico `__invoke()`:

```php
<?php

declare(strict_types=1);

namespace App\Controllers\Users;

use App\DTOs\CreateUserDTO;
use App\Http\Request;
use App\Http\Response;
use App\Services\UserService;

final readonly class RegisterUserAction
{
    public function __construct(
        private UserService $userService
    ) {}

    public function __invoke(Request $request): Response
    {
        $dto  = CreateUserDTO::fromRequest($request);
        $user = $this->userService->register($dto);

        return Response::json([
            'id'    => $user->id(),
            'name'  => $user->name(),
            'email' => $user->email(),
        ], 201);
    }
}
```

---

## Próximo Capítulo

Avance para **[03 — Camada Model (`M`): Entidades, Services, Repositories e Persistência com PDO](03-models-services-repositories-pdo.md)**.

