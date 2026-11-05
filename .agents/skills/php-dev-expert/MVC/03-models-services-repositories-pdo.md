# 03 — Camada Model (`M`): Entidades, Services, Repositories e Persistência com PDO

Voltar para o [Índice de PHP MVC](README.md) | Anterior: [02 — Camada Controller](02-controllers-requests-validation.md)

---

## 1. O Mito do Model: "Model Não é Apenas uma Tabela do Banco"

Um dos erros mais comuns ao aprender MVC em PHP é achar que **Model** significa "uma classe para cada tabela do MySQL/PostgreSQL".

Na engenharia de software, **o Model é toda a Camada de Domínio e Negócios da aplicação**. Para evitar que uma única classe acumule regras de negócio, validação de estado e queries SQL, projetos PHP profissionais dividem a camada **Model (`M`)** em 3 subcamadas coesas:

1. **Entities / Domain Models & Enums (`app/Entities/`, `app/Enums/`):** Representam os objetos do negócio (`User`, `Order`, `Invoice`) e protegem suas invariantes (ex: um pedido cancelado não pode ser pago). Não sabem que banco de dados existe.
2. **Repositories (`app/Repositories/`):** Responsáveis exclusivamente por buscar e salvar Entidades no banco de dados (via **PDO**, Query Builder ou ORM).
3. **Services / Use Cases (`app/Services/`):** Orquestram regras de negócio que envolvem múltiplos repositórios, transações de banco (`beginTransaction`/`commit`), cálculo de taxas ou disparo de eventos.

---

## 2. Active Record vs Data Mapper (Repository Pattern)

Existem duas abordagens principais para persistência na camada Model em PHP:

| Característica | Active Record (ex: Laravel Eloquent, Flight Active Record) | Data Mapper + Repository (ex: Doctrine ORM, PDO + Repository) |
| :--- | :--- | :--- |
| **Como funciona** | A própria classe `User` herda de `Model` e possui métodos `.save()`, `.delete()`, `User::where(...)`. | A classe `User` é um objeto PHP puro (POPO). Um `UserRepository` converte linhas do banco em objetos `User` e vice-versa. |
| **Produtividade inicial** | Altíssima para CRUDs rápidos e médios. | Exige escrever a Entidade e o Repositório separadamente. |
| **Acoplamento** | Alto (a entidade de negócio está acoplada ao banco de dados). | Baixíssimo (a entidade não conhece SQL nem PDO; segue o **SOLID**). |
| **Testabilidade Unitária** | Mais difícil testar sem tocar no banco (SQLite in-memory). | Simples e ultrarrápido (basta criar um `InMemoryUserRepository` ou Mock da interface). |

---

## 3. Implementando a Camada Model em PHP Puro (POPO + Repository + Service)

### 3.1. Enum de Estado (PHP 8.1+ `BackedEnum` vs PHP 7.4 Constantes)

**No PHP 8.1 a 8.5:**
```php
<?php

declare(strict_types=1);

namespace App\Enums;

enum UserStatus: string
{
    case ACTIVE    = 'active';
    case SUSPENDED = 'suspended';
    case PENDING   = 'pending';

    public function canLogin(): bool
    {
        return $this === self::ACTIVE;
    }
}
```

**Equivalente no PHP 7.4:**
```php
<?php

declare(strict_types=1);

namespace App\Enums;

final class UserStatusPhp74
{
    public const ACTIVE    = 'active';
    public const SUSPENDED = 'suspended';
    public const PENDING   = 'pending';
}
```

---

### 3.2. Entidade de Domínio (`app/Entities/User.php`)

A Entidade encapsula o comportamento do domínio e nunca expõe estados inválidos:

```php
<?php

declare(strict_types=1);

namespace App\Entities;

use App\Enums\UserStatus;
use DateTimeImmutable;
use DomainException;

final class User
{
    private ?int $id;
    private string $name;
    private string $email;
    private string $passwordHash;
    private UserStatus $status;
    private DateTimeImmutable $createdAt;

    public function __construct(
        ?int $id,
        string $name,
        string $email,
        string $passwordHash,
        UserStatus $status = UserStatus::ACTIVE,
        ?DateTimeImmutable $createdAt = null
    ) {
        $this->id           = $id;
        $this->name         = $name;
        $this->email        = strtolower(trim($email));
        $this->passwordHash = $passwordHash;
        $this->status       = $status;
        $this->createdAt    = $createdAt ?? new DateTimeImmutable();
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function withId(int $id): self
    {
        $clone = clone $this;
        $clone->id = $id;
        return $clone;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function passwordHash(): string
    {
        return $this->passwordHash;
    }

    public function status(): UserStatus
    {
        return $this->status;
    }

    public function createdAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * Comportamento rico de domínio (Rich Domain Model)
     */
    public function suspend(): void
    {
        if ($this->status === UserStatus::SUSPENDED) {
            throw new DomainException('O usuário já está suspenso.');
        }
        $this->status = UserStatus::SUSPENDED;
    }

    public function verifyPassword(string $plainPassword): bool
    {
        return password_verify($plainPassword, $this->passwordHash);
    }
}
```

---

### 3.3. Contrato do Repositório (`app/Repositories/UserRepositoryInterface.php`)

Seguindo o **Princípio da Inversão de Dependência (D do SOLID)**, o `UserService` depende de uma **Interface**, não do PDO diretamente:

```php
<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\User;

interface UserRepositoryInterface
{
    public function findById(int $id): ?User;

    public function findByEmail(string $email): ?User;

    /**
     * @return array<int, User>
     */
    public function findAllActive(int $limit = 50, int $offset = 0): array;

    public function save(User $user): User;
}
```

---

### 3.4. Implementação Segura com PDO (`app/Repositories/PdoUserRepository.php`)

> [!CAUTION]
> **Prevenção Absoluta contra SQL Injection:** Jamais concatene variáveis na string SQL (`"SELECT * FROM users WHERE id = $id"`). Utilize **SEMPRE** `PDO::prepare()` com *placeholders* nomeados (`:id`, `:email`) e desative a emulação de prepared statements (`PDO::ATTR_EMULATE_PREPARES => false`).

```php
<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\User;
use App\Enums\UserStatus;
use DateTimeImmutable;
use PDO;

final class PdoUserRepository implements UserRepositoryInterface
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findById(int $id): ?User
    {
        $stmt = $this->pdo->prepare(
            'SELECT id, name, email, password_hash, status, created_at
             FROM users
             WHERE id = :id
             LIMIT 1'
        );
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return is_array($row) ? $this->hydrate($row) : null;
    }

    public function findByEmail(string $email): ?User
    {
        $stmt = $this->pdo->prepare(
            'SELECT id, name, email, password_hash, status, created_at
             FROM users
             WHERE email = :email
             LIMIT 1'
        );
        $stmt->execute(['email' => strtolower(trim($email))]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return is_array($row) ? $this->hydrate($row) : null;
    }

    public function findAllActive(int $limit = 50, int $offset = 0): array
    {
        $stmt = $this->pdo->prepare(
            'SELECT id, name, email, password_hash, status, created_at
             FROM users
             WHERE status = :status
             ORDER BY id DESC
             LIMIT :limit OFFSET :offset'
        );
        $stmt->bindValue(':status', UserStatus::ACTIVE->value, PDO::PARAM_STR);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = $this->hydrate($row);
        }

        return $users;
    }

    public function save(User $user): User
    {
        if ($user->id() === null) {
            $stmt = $this->pdo->prepare(
                'INSERT INTO users (name, email, password_hash, status, created_at)
                 VALUES (:name, :email, :password_hash, :status, :created_at)'
            );
            $stmt->execute([
                'name'          => $user->name(),
                'email'         => $user->email(),
                'password_hash' => $user->passwordHash(),
                'status'        => $user->status()->value,
                'created_at'    => $user->createdAt()->format('Y-m-d H:i:s'),
            ]);

            return $user->withId((int) $this->pdo->lastInsertId());
        }

        $stmt = $this->pdo->prepare(
            'UPDATE users
             SET name = :name,
                 email = :email,
                 password_hash = :password_hash,
                 status = :status
             WHERE id = :id'
        );
        $stmt->execute([
            'id'            => $user->id(),
            'name'          => $user->name(),
            'email'         => $user->email(),
            'password_hash' => $user->passwordHash(),
            'status'        => $user->status()->value,
        ]);

        return $user;
    }

    /**
     * Converte uma linha do banco (array) em uma Entidade User rica.
     * @param array<string, mixed> $row
     */
    private function hydrate(array $row): User
    {
        return new User(
            (int) $row['id'],
            (string) $row['name'],
            (string) $row['email'],
            (string) $row['password_hash'],
            UserStatus::from((string) $row['status']),
            new DateTimeImmutable((string) $row['created_at'])
        );
    }
}
```

---

### 3.5. Camada Service (`app/Services/UserService.php`)

O `UserService` concentra a regra de negócio (verificar duplicidade de e-mail, gerar hash criptográfico da senha com `PASSWORD_ARGON2ID` ou `PASSWORD_DEFAULT` e persistir):

```php
<?php

declare(strict_types=1);

namespace App\Services;

use App\DTOs\CreateUserDTO;
use App\Entities\User;
use App\Enums\UserStatus;
use App\Exceptions\DomainException;
use App\Repositories\UserRepositoryInterface;

final class UserService
{
    private UserRepositoryInterface $users;

    public function __construct(UserRepositoryInterface $users)
    {
        $this->users = $users;
    }

    /**
     * @return array<int, User>
     */
    public function listActiveUsers(): array
    {
        return $this->users->findAllActive();
    }

    public function findById(int $id): ?User
    {
        return $this->users->findById($id);
    }

    public function register(CreateUserDTO $dto): User
    {
        if ($this->users->findByEmail($dto->email) !== null) {
            throw new DomainException('Este endereço de e-mail já está cadastrado.');
        }

        // Usa Argon2id se compilado no PHP, caso contrário Bcrypt (PASSWORD_DEFAULT)
        $algo = defined('PASSWORD_ARGON2ID') ? PASSWORD_ARGON2ID : PASSWORD_DEFAULT;
        $hash = password_hash($dto->plainPassword, $algo);

        $user = new User(
            null,
            $dto->name,
            $dto->email,
            $hash,
            UserStatus::ACTIVE
        );

        return $this->users->save($user);
    }
}
```

---

## 4. Gerenciamento de Transações no Service

Quando um caso de uso altera mais de uma tabela (ex: criar um Pedido, baixar o Estoque e registrar o Pagamento), envolva a operação em uma transação atômica:

```php
public function checkout(OrderDTO $dto): Order
{
    $this->pdo->beginTransaction();

    try {
        $this->stockRepository->decrement($dto->productId, $dto->quantity);
        $order = $this->orderRepository->create($dto);
        $this->paymentRepository->recordCharge($order->id(), $dto->amountCents);

        $this->pdo->commit();
        return $order;
    } catch (\Throwable $e) {
        if ($this->pdo->inTransaction()) {
            $this->pdo->rollBack();
        }
        throw $e;
    }
}
```

---

## Próximo Capítulo

Avance para **[04 — Camada View (`V`): Templates, Layouts, APIs JSON e Segurança (XSS / CSRF)](04-views-templates-security-xss-csrf.md)**.

