# Inicia uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.begin-transaction.php

---

# mysqli::begin\_transaction

# mysqli\_begin\_transaction

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

mysqli::begin\_transaction -- mysqli\_begin\_transaction — Inicia uma transação

### Descrição

Estilo orientado a objetos

public function **mysqli::begin\_transaction**([int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

Estilo procedural:

function **mysqli\_begin\_transaction**([mysqli](class.mysqli.md) `$mysql`, [int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

Inicia uma transação. Requer o mecanismo InnoDB
(é ativado por padrão). Para detalhes adicionais sobre como as transações do MySQL
funcionam, consulte [» https://dev.mysql.com/doc/mysql/en/commit.html](https://dev.mysql.com/doc/mysql/en/commit.html).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`flags`
:   As flags válidas são:

    - **`MYSQLI_TRANS_START_READ_ONLY`**:
      Inicia a transação como "START TRANSACTION READ ONLY".
      Requer MySQL 5.6 e superior.
    - **`MYSQLI_TRANS_START_READ_WRITE`**:
      Inicia a transação como "START TRANSACTION READ WRITE".
      Requer MySQL 5.6 e superior.
    - **`MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT`**:
      Inicia a transação como "START TRANSACTION WITH CONSISTENT SNAPSHOT".

`name`
:   Nome do ponto de salvamento para a transação.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `name` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **mysqli::begin\_transaction()****

Estilo orientado a objetos

```
<?php

/* Diga ao mysqli para lançar uma exceção se ocorrer um erro */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* O mecanismo de tabela deve suportar transações */
$mysqli->query("CREATE TABLE IF NOT EXISTS language (
    Code text NOT NULL,
    Speakers int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

/* Inicia transação */
$mysqli->begin_transaction();

try {
    /* Insira alguns valores */
    $mysqli->query("INSERT INTO language(Code, Speakers) VALUES ('DE', 42000123)");

    /* Tente inserir valores inválidos */
    $language_code = 'FR';
    $native_speakers = 'Unknown';
    $stmt = $mysqli->prepare('INSERT INTO language(Code, Speakers) VALUES (?,?)');
    $stmt->bind_param('ss', $language_code, $native_speakers);
    $stmt->execute();

    /* Se o código atingir esse ponto sem erros, confirme os dados no banco de dados */
    $mysqli->commit();
} catch (mysqli_sql_exception $exception) {
    $mysqli->rollback();

    throw $exception;
}
```

Estilo procedural

```
<?php

/* Diga ao mysqli para lançar uma exceção se ocorrer um erro */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

/* O mecanismo de tabela deve suportar transações */
mysqli_query($mysqli, "CREATE TABLE IF NOT EXISTS language (
    Code text NOT NULL,
    Speakers int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

/* Inicia transação */
mysqli_begin_transaction($mysqli);

try {
    /* Insira alguns valores */
    mysqli_query($mysqli, "INSERT INTO language(Code, Speakers) VALUES ('DE', 42000123)");

    /* Tente inserir valores inválidos */
    $language_code = 'FR';
    $native_speakers = 'Unknown';
    $stmt = mysqli_prepare($mysqli, 'INSERT INTO language(Code, Speakers) VALUES (?,?)');
    mysqli_stmt_bind_param($stmt, 'ss', $language_code, $native_speakers);
    mysqli_stmt_execute($stmt);

    /* Se o código atingir esse ponto sem erros, confirme os dados no banco de dados */
    mysqli_commit($mysqli);
} catch (mysqli_sql_exception $exception) {
    mysqli_rollback($mysqli);

    throw $exception;
}
```

### Notas

> **Nota**:
>
> Esta função não funciona com tipos de tabelas não transacionais (como
> MyISAM ou ISAM).

### Veja também

- [mysqli\_autocommit()](mysqli.autocommit.md) - Ativa ou desativa a gravação automática das modificações no banco de dados
- [mysqli\_commit()](mysqli.commit.md) - Grava a transação atual
- [mysqli\_rollback()](mysqli.rollback.md) - Reverte a transação atual

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
