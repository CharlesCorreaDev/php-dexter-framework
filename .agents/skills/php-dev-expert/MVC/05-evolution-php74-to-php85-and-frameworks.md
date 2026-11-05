# 05 — Evolução do MVC (PHP 7.4 ao 8.5), Frameworks, Anti-Patterns e Testes

Voltar para o [Índice de PHP MVC](README.md) | Anterior: [04 — Camada View e Segurança](04-views-templates-security-xss-csrf.md)

---

## 1. Evolução Sintática do MVC: Do PHP 7.4 ao PHP 8.5

A arquitetura conceitual do MVC permanece a mesma entre versões do PHP, mas os recursos de linguagem introduzidos entre o **PHP 7.4** e o **PHP 8.5** reduzem drasticamente o *boilerplate* em Controllers, Models e DTOs.

### Tabela Comparativa de Recursos Aplicados ao MVC

| Versão | Recursos-Chave para Arquitetura MVC | Onde Impacta no MVC |
| :--- | :--- | :--- |
| **PHP 7.4** | Propriedades tipadas (`private UserService $service;`), Arrow Functions (`fn($x) => ...`), Null coalescing assignment (`??=`). | Tipagem de dependências em Controllers, Models e coleções. |
| **PHP 8.0** | **Constructor Property Promotion**, **Attributes** (`#[Route]`), `match`, Union Types (`int\|string`), Named Arguments, Nullsafe (`$user?->profile()?->avatar()`). | Elimina atribuições repetitivas em construtores de Controllers/Services; permite rotas via atributos e navegação segura nas Views. |
| **PHP 8.1** | **Enums** (`enum OrderStatus: string`), propriedades `readonly`, Intersection Types, First-class callable syntax (`$this->handle(...)`). | Substitui constantes mágicas de status nos Models por Enums tipados; protege DTOs contra mutação. |
| **PHP 8.2** | **`readonly class`**, tipos `true`/`false`/`null` standalone, DNF Types, `#[SensitiveParameter]`. | Classes inteiras de Controller, Service e DTO declaradas como `final readonly class`; oculta senhas em stack traces (`#[SensitiveParameter] string $password`). |
| **PHP 8.3** | Constantes de classe tipadas (`public const int MAX_ITEMS = 50;`), atributo **`#[Override]`**, `json_validate()`. | Garante em tempo de compilação que um Repositório ou Controller filho realmente sobrescreve um método da classe base/interface; valida payloads JSON sem custo de alocação de memória. |
| **PHP 8.4** | **Property Hooks** (`public string $email { set => strtolower(trim($value)); }`), **Asymmetric Visibility** (`public private(set) string $status`), `new MyClass()->method()` sem parênteses extras. | Elimina dezenas de *getters/setters* triviais nas Entidades (Model), permitindo leitura pública e escrita restrita à própria Entidade (`public private(set)`). |
| **PHP 8.5** | **Pipe Operator (`|>`)**, `#[NoDiscard]`, `get_error_handler()`, melhorias de introspecção e `array_first()` / `array_last()`. | Permite encadear pipelines funcionais de transformação de Request -> DTO -> Service -> Resource com o operador `|>`. |

---

### Exemplo Prático: Entidade de Model no PHP 8.4 / 8.5 (Property Hooks + Asymmetric Visibility)

Veja como uma Entidade `Product` de 70 linhas no PHP 7.4 se transforma em 25 linhas expressivas e seguras no **PHP 8.4+**:

```php
<?php

declare(strict_types=1);

namespace App\Entities;

use DomainException;

final class Product
{
    // Leitura pública, mas mutação permitida APENAS dentro da própria classe Product!
    public private(set) int $stockQuantity;

    // Property Hook (PHP 8.4+): sanitiza automaticamente na atribuição
    public string $name {
        set (string $value) {
            $trimmed = trim($value);
            if ($trimmed === '') {
                throw new DomainException('O nome do produto não pode ser vazio.');
            }
            $this->name = $trimmed;
        }
    }

    // Property Hook virtual (calculado sob demanda, sem armazenar propriedade extra)
    public bool $isAvailable {
        get => $this->stockQuantity > 0;
    }

    public function __construct(string $name, int $initialStock)
    {
        $this->name          = $name;
        $this->stockQuantity = max(0, $initialStock);
    }

    public function decreaseStock(int $amount): void
    {
        if ($amount <= 0 || $amount > $this->stockQuantity) {
            throw new DomainException('Estoque insuficiente para a baixa solicitada.');
        }
        $this->stockQuantity -= $amount;
    }
}
```

### Exemplo Prático: Pipeline de Controller com Pipe Operator `|>` (PHP 8.5)

No **PHP 8.5**, o operador de pipe (`|>`) permite expressar o fluxo de um Controller como um pipeline claro da esquerda para a direita:

```php
public function store(Request $request): Response
{
    return $request
        |> CreateUserDTO::fromRequest(...)
        |> $this->userService->register(...)
        |> (fn(User $user) => new UserResource($user))
        |> (fn(UserResource $res) => Response::json($res, 201));
}
```

---

## 2. Como os Principais Frameworks PHP Implementam o MVC

| Componente MVC | PHP Vanilla (Este Guia) | Laravel (v10 / v11 / v12) | Symfony (v6 / v7) | FlightPHP (v3) / Slim (v4) |
| :--- | :--- | :--- | :--- | :--- |
| **Front Controller** | `public/index.php` | `public/index.php` | `public/index.php` (`Runtime`) | `public/index.php` |
| **Router** | `App\Http\Router` | `routes/web.php` e `routes/api.php` | Attributes `#[Route('/users')]` nos Controllers | `Flight::route('GET /users', ...)` |
| **Controller (`C`)** | `App\Controllers\*Controller` | `App\Http\Controllers\*Controller` | `App\Controller\*Controller` (`AbstractController`) | Classes Controller ou Closures/Actions |
| **Validação / DTO** | `CreateUserDTO::fromRequest()` | `FormRequest` (`StoreUserRequest`) ou `spatie/laravel-data` | `#[MapRequestPayload]` + `Symfony\Validator` | Validação customizada / Respect\Validation |
| **Model / Persistência (`M`)** | Entidades POPO + `Pdo*Repository` | **Eloquent ORM** (Active Record: `App\Models\User`) | **Doctrine ORM** (Data Mapper: `App\Entity\User` + `UserRepository`) | `SimplePdo` / Active Record leve ou PDO |
| **View (`V`)** | `ViewRenderer` (`.php`) | **Blade** (`resources/views/*.blade.php`) | **Twig** (`templates/*.html.twig`) | **Latte** / **Twig** / Views nativas |
| **Container DI** | `App\Http\Container` | Laravel Service Container | Symfony DependencyInjection | `flightphp/container` (Dice / PSR-11) |

---

## 3. Anti-Patterns Clássicos em PHP MVC (e Como Corrigir)

### Anti-Pattern 1: "God Controller" (Controller Deus)
- **Sintoma:** Um método de Controller com 300 linhas que abre conexão PDO, valida `$_POST` com 15 `if`s aninhados, calcula impostos, envia e-mail via SMTP e monta HTML.
- **Como corrigir:**
  1. Extraia a validação de entrada para um **DTO** (`CreateOrderDTO::fromRequest($request)`).
  2. Extraia o cálculo e orquestração para um **Service** (`OrderService::placeOrder($dto)`).
  3. Extraia o SQL para um **Repository** (`PdoOrderRepository`).

### Anti-Pattern 2: Consultas SQL na View (Problema N+1 Oculto)
- **Sintoma:** Dentro do arquivo `views/orders/index.php`, dentro de um `foreach ($orders as $order)`, alguém chama `$customer = $db->query("SELECT * FROM customers WHERE id = {$order->customerId}")`. Se houver 100 pedidos, serão disparadas **101 queries SQL** na renderização da página.
- **Como corrigir:** Faça um `JOIN` ou *Eager Loading* (`WHERE id IN (...)`) no **Repository** antes de passar os dados prontos para a View.

### Anti-Pattern 3: Modelo Anêmico (*Anemic Domain Model*)
- **Sintoma:** As classes em `Entities/` possuem apenas propriedades públicas ou dezenas de `getX()` / `setX()` sem nenhuma validação, permitindo criar um `Order` com valor negativo ou alterar o status de `CANCELLED` para `SHIPPED`.
- **Como corrigir:** Proteja o construtor da Entidade e substitua *setters* genéricos (`$order->setStatus('shipped')`) por métodos de negócio expressivos (`$order->markAsShipped()`), lançando `DomainException` caso a transição seja inválida.

### Anti-Pattern 4: Vazamento da Entidade do Banco Direto no JSON
- **Sintoma:** Fazer `return Response::json($user)` diretamente em uma classe Active Record sem filtrar os atributos, expondo acidentalmente `password_hash`, `remember_token` ou `is_internal_admin` na API pública.
- **Como corrigir:** Sempre passe a entidade por um `UserResource` (ou defina explicitamente a lista branca na serialização).

---

## 4. Testando a Arquitetura MVC com PHPUnit

Graças à separação entre `Controller`, `Service` e `UserRepositoryInterface`, podemos testar toda a regra de negócio da camada **Model/Service** em **milissegundos**, sem precisar subir banco de dados MySQL ou servidor web:

### 4.1. Repositório Fake em Memória (`tests/Doubles/InMemoryUserRepository.php`)
```php
<?php

declare(strict_types=1);

namespace Tests\Doubles;

use App\Entities\User;
use App\Enums\UserStatus;
use App\Repositories\UserRepositoryInterface;

final class InMemoryUserRepository implements UserRepositoryInterface
{
    /** @var array<int, User> */
    private array $items = [];
    private int $autoIncrement = 1;

    public function findById(int $id): ?User
    {
        return $this->items[$id] ?? null;
    }

    public function findByEmail(string $email): ?User
    {
        $normalized = strtolower(trim($email));
        foreach ($this->items as $user) {
            if ($user->email() === $normalized) {
                return $user;
            }
        }
        return null;
    }

    public function findAllActive(int $limit = 50, int $offset = 0): array
    {
        $active = array_filter(
            $this->items,
            static fn(User $u): bool => $u->status() === UserStatus::ACTIVE
        );
        return array_slice(array_values($active), $offset, $limit);
    }

    public function save(User $user): User
    {
        if ($user->id() === null) {
            $user = $user->withId($this->autoIncrement++);
        }
        $this->items[$user->id()] = $user;
        return $user;
    }
}
```

### 4.2. Teste Unitário do Caso de Uso (`tests/Unit/UserServiceTest.php`)
```php
<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\DTOs\CreateUserDTO;
use App\Exceptions\DomainException;
use App\Services\UserService;
use PHPUnit\Framework\TestCase;
use Tests\Doubles\InMemoryUserRepository;

final class UserServiceTest extends TestCase
{
    public function test_deve_registrar_novo_usuario_com_senha_criptografada(): void
    {
        $repository = new InMemoryUserRepository();
        $service    = new UserService($repository);

        $dto  = new CreateUserDTO('Maria Silva', 'maria@exemplo.com', 'SenhaForte#2026');
        $user = $service->register($dto);

        self::assertSame(1, $user->id());
        self::assertSame('maria@exemplo.com', $user->email());
        self::assertNotSame('SenhaForte#2026', $user->passwordHash());
        self::assertTrue($user->verifyPassword('SenhaForte#2026'));
    }

    public function test_nao_deve_permitir_cadastro_com_email_duplicado(): void
    {
        $repository = new InMemoryUserRepository();
        $service    = new UserService($repository);

        $dto = new CreateUserDTO('Maria Silva', 'maria@exemplo.com', 'SenhaForte#2026');
        $service->register($dto);

        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Este endereço de e-mail já está cadastrado.');

        $service->register($dto);
    }
}
```

---

## Referências Cruzadas na Skill `php-dev-expert`

- [Índice Principal do Guia MVC](README.md)
- [Padrões & Arquitetura Geral (`../patterns.md`)](../patterns.md)
- [Segurança Crítica & Blindagem PHP2Shell (`../security-cves.md`)](../security-cves.md)
- [Manual Oficial do PHP em Português (`../php-docs/_INDEX.md`)](../php-docs/_INDEX.md)
- [Guias de Servidores Web (`../servers/`)](../servers/)

