# Ativa ou desativa a gravação automática das modificações no banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.autocommit.php

---

# mysqli::autocommit

# mysqli\_autocommit

(PHP 5, PHP 7, PHP 8)

mysqli::autocommit -- mysqli\_autocommit — Ativa ou desativa a gravação automática das modificações no banco de dados

### Descrição

Estilo orientado a objetos

public function **mysqli::autocommit**([bool](language.types.boolean.md) `$enable`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_autocommit**([mysqli](class.mysqli.md) `$mysql`, [bool](language.types.boolean.md) `$enable`): [bool](language.types.boolean.md)

Ativa ou desativa o modo de gravação automática nas consultas para a conexão do banco de dados.

Para determinar o estado atual da gravação automática use o comando SQL
`SELECT @@autocommit`.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`enable`
:   Habilitar ou não a gravação automática.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

**Exemplo #1 Exemplo de **mysqli::autocommit()****

Estilo orientado a objetos

```
<?php

/* Solicita ao mysqli que dispare uma exceção se um erro ocorrer */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* O motor da tabela tem que suportar transações */
$mysqli->query("CREATE TABLE IF NOT EXISTS language (
    Code text NOT NULL,
    Speakers int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

/* Desliga a gravação automática */
$mysqli->autocommit(false);

$result = $mysqli->query("SELECT @@autocommit");
$row = $result->fetch_row();
printf("Gravação automática = %s\n", $row[0]);

try {
    /* Prepara a declaração de inserção */
    $stmt = $mysqli->prepare('INSERT INTO language(Code, Speakers) VALUES (?,?)');
    $stmt->bind_param('ss', $language_code, $native_speakers);

    /* Insere alguns valores */
    $language_code = 'DE';
    $native_speakers = 50_123_456;
    $stmt->execute();
    $language_code = 'FR';
    $native_speakers = 40_546_321;
    $stmt->execute();

    /* Grava os dados no banco. Isto não liga a gravação automática */
    $mysqli->commit();
    print "2 linhas gravadas no banco de dados\n";

    $result = $mysqli->query("SELECT @@autocommit");
    $row = $result->fetch_row();
    printf("Gravação automática = %s\n", $row[0]);

    /* Tenta inserir mais valores */
    $language_code = 'PL';
    $native_speakers = 30_555_444;
    $stmt->execute();
    $language_code = 'DK';
    $native_speakers = 5_222_444;
    $stmt->execute();

    /* Ligar a gravação automática irá disparar uma gravação */
    $mysqli->autocommit(true);

    print "2 linhas gravadas no banco de dados\n";
} catch (mysqli_sql_exception $exception) {
    $mysqli->rollback();

    throw $exception;
}
```

Estilo procedural

```
<?php

/* Solicita ao mysqli que dispare uma exceção se um erro ocorrer */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

/* O motor da tabela tem que suportar transações */
mysqli_query($mysqli, "CREATE TABLE IF NOT EXISTS language (
    Code text NOT NULL,
    Speakers int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

/* Desliga a gravação automática */
mysqli_autocommit($mysqli, false);

$result = mysqli_query($mysqli, "SELECT @@autocommit");
$row = mysqli_fetch_row($result);
printf("Gravação automática = %s\n", $row[0]);

try {
    /* Prepara a declaração de inserção */
    $stmt = mysqli_prepare($mysqli, 'INSERT INTO language(Code, Speakers) VALUES (?,?)');
    mysqli_stmt_bind_param($stmt, 'ss', $language_code, $native_speakers);

    /* Insere alguns valores */
    $language_code = 'DE';
    $native_speakers = 50_123_456;
    mysqli_stmt_execute($stmt);
    $language_code = 'FR';
    $native_speakers = 40_546_321;
    mysqli_stmt_execute($stmt);

    /* Grava os dados no banco. Isto não liga a gravação automática */
    mysqli_commit($mysqli);
    print "2 linhas gravadas no banco de dados\n";

    $result = mysqli_query($mysqli, "SELECT @@autocommit");
    $row = mysqli_fetch_row($result);
    printf("Gravação automática = %s\n", $row[0]);

    /* Tenta inserir mais valores */
    $language_code = 'PL';
    $native_speakers = 30_555_444;
    mysqli_stmt_execute($stmt);
    $language_code = 'DK';
    $native_speakers = 5_222_444;
    mysqli_stmt_execute($stmt);

    /* Ligar a gravação automática irá disparar uma gravação */
    mysqli_autocommit($mysqli, true);

    print "2 linhas gravadas no banco de dados\n";
} catch (mysqli_sql_exception $exception) {
    mysqli_rollback($mysqli);

    throw $exception;
}
```

Os exemplos acima produzirão:

```
Gravação automática = 0
2 linhas gravadas no banco de dados
Gravação automática = 0
2 linhas gravadas no banco de dados
Gravação automática = 0
2 linhas gravadas no banco de dados
Gravação automática = 0
2 linhas gravadas no banco de dados
```

### Notas

> **Nota**:
>
> Esta função não funciona com tipos de tabelas não transacionais (como
> MyISAM ou ISAM).

### Veja também

- [mysqli\_begin\_transaction()](mysqli.begin-transaction.md) - Inicia uma transação
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
