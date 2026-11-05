# Retorna o erro SQLSTATE da operação da instrução anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.sqlstate.php

---

# mysqli\_stmt::$sqlstate

# mysqli\_stmt\_sqlstate

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::$sqlstate -- mysqli\_stmt\_sqlstate — Retorna o erro SQLSTATE da operação da instrução anterior

### Descrição

Estilo orientado a objetos

[string](language.types.string.md) [$mysqli\_stmt->sqlstate](mysqli-stmt.sqlstate.md);

Estilo procedural

function **mysqli\_stmt\_sqlstate**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [string](language.types.string.md)

Retorna uma string contento o código de erro SQLSTATE
para a função de instrução preparada mais recentemente chamada, que possa ter sucesso ou falhar.
O código de erro consiste de cinco caracteres. `'00000'` significa que não houve erro.
Os valores são especificados pela ANSI SQL e pela ODBC. Para uma lista de valores possíveis, consulte
[» https://dev.mysql.com/doc/mysql/en/error-handling.html](https://dev.mysql.com/doc/mysql/en/error-handling.html).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Retorna uma string contendo o código de erro SQLSTATE para o último erro.
O código de erro consiste de cinco caracteres. `'00000'` significa que não houve erro.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
/* abre uma conexão */
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->query("CREATE TABLE myCountry LIKE Country");
$mysqli->query("INSERT INTO myCountry SELECT * FROM Country");

$query = "SELECT Name, Code FROM myCountry ORDER BY Name";
if ($stmt = $mysqli->prepare($query)) {

    /* apaga a tabela */
    $mysqli->query("DROP TABLE myCountry");

    /* executa a instrução */
    $stmt->execute();

    printf("Erro: %s.\n", $stmt->sqlstate);

    /* fecha a instrução */
    $stmt->close();
}

/* fecha a conexão */
$mysqli->close();
?>
```

**Exemplo #2 Estilo procedural**

```
<?php
/* abre uma conexão */
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

mysqli_query($link, "CREATE TABLE myCountry LIKE Country");
mysqli_query($link, "INSERT INTO myCountry SELECT * FROM Country");

$query = "SELECT Name, Code FROM myCountry ORDER BY Name";
if ($stmt = mysqli_prepare($link, $query)) {

    /* apaga a tabela */
    mysqli_query($link, "DROP TABLE myCountry");

    /* executa a instrução */
    mysqli_stmt_execute($stmt);

    printf("Error: %s.\n", mysqli_stmt_sqlstate($stmt));

    /* fecha a instrução */
    mysqli_stmt_close($stmt);
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Erro: 42S02.
```

### Notas

> **Nota**:
>
> Observe que nem todos os erros do MySQL são mapeados para SQLSTATEs.
> O valor `HY000` (erro geral) é usado para erros não mapeados.

### Veja também

- [mysqli\_stmt\_errno()](mysqli-stmt.errno.md) - Retorna o código de erro para a chamada de instrução mais recente
- [mysqli\_stmt\_error()](mysqli-stmt.error.md) - Retorna uma descrição em string para o último erro de instrução

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
