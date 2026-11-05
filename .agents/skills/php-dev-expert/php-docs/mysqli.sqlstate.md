# Retorna o erro SQLSTATE da operação MySQL anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.sqlstate.php

---

# mysqli::$sqlstate

# mysqli\_sqlstate

(PHP 5, PHP 7, PHP 8)

mysqli::$sqlstate -- mysqli\_sqlstate — Retorna o erro SQLSTATE da operação MySQL anterior

### Descrição

Estilo orientado a objetos

[string](language.types.string.md) [$mysqli->sqlstate](mysqli.sqlstate.md);

Estilo procedural

function **mysqli\_sqlstate**([mysqli](class.mysqli.md) `$mysql`): [string](language.types.string.md)

Retorna uma string contendo o código de erro SQLSTATE para o último erro.
O código de erro consiste em cinco caracteres. `'00000'` significa nenhum erro.
Os valores são especificados por ANSI SQL e ODBC. Para obter uma lista de valores possíveis, consulte
[» https://dev.mysql.com/doc/mysql/en/error-handling.html](https://dev.mysql.com/doc/mysql/en/error-handling.html).

> **Nota**:
>
> Observe que nem todos os erros do MySQL ainda estão mapeados para SQLSTATE.
> O valor `HY000` (erro geral) é usado para erros não mapeados.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna uma string contendo o código de erro SQLSTATE para o último erro.
O código de erro consiste em cinco caracteres. `'00000'` significa nenhum erro.

### Examples

**Exemplo #1 Exemplo de $mysqli->sqlstate**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* Table City já existe, então devemos receber um erro */
try {
    $mysqli->query("CREATE TABLE City (ID INT, Name VARCHAR(30))");
} catch (mysqli_sql_exception) {
    printf("Erro - SQLSTATE %s.\n", $mysqli->sqlstate);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* Table City já existe, então devemos receber um erro */
try {
    mysqli_query($link, "CREATE TABLE City (ID INT, Name VARCHAR(30))");
} catch (mysqli_sql_exception) {
    printf("Erro - SQLSTATE %s.\n", mysqli_sqlstate($link));
}
```

Os exemplos acima produzirão:

```
Erro - SQLSTATE 42S01.
```

### Veja também

- [mysqli\_errno()](mysqli.errno.md) - Retorna o código de erro para a chamada de função mais recente
- [mysqli\_error()](mysqli.error.md) - Retorna uma string descrevendo o último erro

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
