# 04 — Camada View (`V`): Templates, Layouts, APIs JSON e Segurança (XSS / CSRF)

Voltar para o [Índice de PHP MVC](README.md) | Anterior: [03 — Camada Model, Services e PDO](03-models-services-repositories-pdo.md)

---

## 1. O Papel da Camada View (`V`)

A **View** é responsável exclusivamente por **transformar os dados entregues pelo Controller em uma representação visual ou estruturada** para o cliente (HTML, JSON, XML, PDF ou CSV).

### Regras de Ouro da View
1. **Zero Acesso ao Banco de Dados:** Uma View nunca executa queries SQL nem chama Repositórios. Todos os dados necessários devem chegar prontos como variáveis.
2. **Apenas Lógica de Apresentação:** Na View são permitidos apenas `foreach`, `if/else` de exibição, formatação de datas/moedas e chamadas de escape.
3. **Escape por Padrão (Anti-XSS):** Todo dado dinâmico originado de usuários ou do banco de dados **DEVE** ser escapado antes de ser impresso no HTML.

---

## 2. Construindo um Motor de Views Nativo em PHP (`ViewRenderer.php`)

O próprio PHP nasceu como uma linguagem de templates, mas usá-lo de forma organizada requer um `ViewRenderer` que isole o escopo das variáveis (`extract` controlado), utilize *Output Buffering* (`ob_start` / `ob_get_clean`) e suporte **Layouts Mestres**:

```php
<?php

declare(strict_types=1);

namespace App\Views;

use RuntimeException;

final class ViewRenderer
{
    private string $basePath;
    private ?string $layout = 'layouts/main';

    public function __construct(string $basePath)
    {
        $this->basePath = rtrim($basePath, '/\\');
    }

    /**
     * Escapa strings com segurança contra Cross-Site Scripting (XSS).
     */
    public function e(?string $value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /**
     * Renderiza um template dentro do layout configurado.
     * @param array<string, mixed> $data
     */
    public function render(string $template, array $data = []): string
    {
        $content = $this->renderPartial($template, $data);

        if ($this->layout === null) {
            return $content;
        }

        return $this->renderPartial($this->layout, array_merge($data, [
            'content' => $content,
        ]));
    }

    /**
     * Renderiza apenas um arquivo de template parcial sem layout.
     * @param array<string, mixed> $data
     */
    public function renderPartial(string $template, array $data = []): string
    {
        // Previne Path Traversal no nome do template
        $cleanTemplate = str_replace(['..', '\\'], ['', '/'], $template);
        $filePath = $this->basePath . '/' . ltrim($cleanTemplate, '/') . '.php';

        if (!is_file($filePath)) {
            throw new RuntimeException("Template de View não encontrado: [{$filePath}]");
        }

        // Isola o escopo da View usando uma Closure anônima
        $renderScope = function (string $__file, array $__data): string {
            extract($__data, EXTR_SKIP);
            ob_start();
            try {
                require $__file;
                return (string) ob_get_clean();
            } catch (\Throwable $e) {
                ob_end_clean();
                throw $e;
            }
        };

        return $renderScope($filePath, $data);
    }
}
```

---

## 3. Exemplo de Layout e View HTML Segura

### 3.1. Layout Principal (`resources/views/layouts/main.php`)
```php
<?php
/**
 * @var \App\Views\ViewRenderer $this
 * @var string $title
 * @var string $content
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title ?? 'Sistema MVC') ?></title>
    <link rel="stylesheet" href="/assets/app.css">
</head>
<body>
    <header>
        <nav>
            <a href="/">Início</a> | <a href="/users">Usuários</a>
        </nav>
    </header>

    <main class="container">
        <?= $content ?>
    </main>

    <footer>
        <small>&copy; <?= date('Y') ?> — Aplicação PHP MVC</small>
    </footer>
</body>
</html>
```

### 3.2. Template de Listagem (`resources/views/users/index.php`)
```php
<?php
/**
 * @var \App\Views\ViewRenderer $this
 * @var array<int, \App\Entities\User> $users
 */
?>
<h1>Usuários Ativos</h1>

<?php if ($users === []): ?>
    <p>Nenhum usuário ativo encontrado.</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Criado em</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= (int) $user->id() ?></td>
                    <td>
                        <a href="/users/<?= (int) $user->id() ?>">
                            <?= $this->e($user->name()) ?>
                        </a>
                    </td>
                    <td><?= $this->e($user->email()) ?></td>
                    <td><?= $this->e($user->createdAt()->format('d/m/Y H:i')) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
```

---

## 4. Segurança na Camada View: XSS e CSRF

### 4.1. Prevenção contra XSS (Cross-Site Scripting)
- **Contexto HTML (`<div>`, `<p>`, `<td>`):** Sempre use `$this->e($valor)` (`htmlspecialchars($valor, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')`).
- **Contexto de Atributos (`value="..."`, `title="..."`):** Use `$this->e($valor)` **e sempre envolva o atributo entre aspas duplas**.
- **Contexto de Links (`href="..."`):** Valide se a URL começa com `https://`, `http://` ou `/` antes de imprimir, bloqueando pseudo-protocolos maliciosos como `javascript:alert(1)`.
- **Contexto JavaScript Inline:** Nunca concatene strings PHP diretamente dentro de `<script>`. Use `json_encode($dados, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT)`.

### 4.2. Proteção contra CSRF (Cross-Site Request Forgery)
Qualquer formulário `POST`, `PUT`, `PATCH` ou `DELETE` baseado em sessão de navegador deve validar um **Token CSRF** criptograficamente seguro:

```php
<?php

declare(strict_types=1);

namespace App\Middlewares;

use App\Http\Request;
use App\Http\Response;
use Closure;

final class CsrfMiddleware implements MiddlewareInterface
{
    public static function generateToken(): string
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (empty($_SESSION['_csrf_token'])) {
            $_SESSION['_csrf_token'] = bin2hex(random_bytes(32));
        }
        return (string) $_SESSION['_csrf_token'];
    }

    public function handle(Request $request, Closure $next): Response
    {
        if (in_array($request->method(), ['POST', 'PUT', 'PATCH', 'DELETE'], true)) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            $sessionToken = (string) ($_SESSION['_csrf_token'] ?? '');
            $submittedToken = (string) $request->input('_csrf_token', '');

            // hash_equals previne ataques de Timing Side-Channel
            if ($sessionToken === '' || !hash_equals($sessionToken, $submittedToken)) {
                return Response::json(['error' => 'Token CSRF inválido ou expirado (419).'], 419);
            }
        }

        return $next($request);
    }
}
```

No formulário da View:
```html
<form method="POST" action="/users">
    <input type="hidden" name="_csrf_token" value="<?= $this->e(\App\Middlewares\CsrfMiddleware::generateToken()) ?>">
    <!-- campos do formulário -->
</form>
```

---

## 5. Quando a View é uma API JSON (Resources / Responders)

Em aplicações modernas (SPAs em React/Vue, aplicativos móveis ou microsserviços), a camada **View (`V`)** não é um arquivo `.php` com HTML, mas sim um **Resource / Presenter / Responder** que transforma a Entidade `User` em um payload JSON padronizado (sem vazar campos sensíveis como `passwordHash`):

```php
<?php

declare(strict_types=1);

namespace App\Views\Resources;

use App\Entities\User;
use JsonSerializable;

final class UserResource implements JsonSerializable
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        return [
            'id'         => $this->user->id(),
            'name'       => $this->user->name(),
            'email'      => $this->user->email(),
            'status'     => $this->user->status()->value,
            'created_at' => $this->user->createdAt()->format( DATE_ATOM ),
        ];
    }
}
```

---

## 6. Motores de Template Dedicados no Ecossistema PHP

Para projetos de médio e grande porte que renderizam HTML no servidor (SSR), considere motores de template dedicados que já fazem **Auto-Escaping contra XSS por padrão**:

| Template Engine | Ecossistema Principal | Sintaxe de Escape | Diferencial Técnico |
| :--- | :--- | :--- | :--- |
| **Twig** | Symfony, Slim, CraftCMS | `{{ user.name }}` | Sandbox seguro, herança de blocos (`{% extends %}`), compilado para classes PHP em cache. |
| **Blade** | Laravel, pacotes standalone | `{{ $user->name() }}` | Componentes declarativos (`<x-alert />`), diretivas `@if`/`@foreach` e baixa curva de aprendizado. |
| **Latte** | Nette, FlightPHP | `{$user->name()}` | **Context-Aware Escaping** real (sabe diferenciar automaticamente se a variável está no HTML, dentro de um atributo `onclick` ou em uma tag `<script>`). |

---

## Próximo Capítulo

Avance para **[05 — Evolução do MVC (PHP 7.4 ao 8.5), Frameworks, Anti-Patterns e Testes](05-evolution-php74-to-php85-and-frameworks.md)**.

