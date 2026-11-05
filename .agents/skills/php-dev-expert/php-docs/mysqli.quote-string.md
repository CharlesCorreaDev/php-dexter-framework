# Quotes and escapes a string for use in an SQL statement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quote-string.php

---

# mysqli::quote\_string

# mysqli\_quote\_string

(PHP 8 >= 8.6.0)

mysqli::quote\_string -- mysqli\_quote\_string — Quotes and escapes a string for use in an SQL statement

### Descrição

Estilo orientado a objetos

public function **mysqli::quote\_string**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Estilo procedural

function **mysqli\_quote\_string**([mysqli](class.mysqli.md) `$mysql`, [string](language.types.string.md) `$string`): [string](language.types.string.md)

Creates a legal SQL string literal that can be used in an SQL statement.
The given string is escaped in the same way as
[mysqli::real\_escape\_string()](mysqli.real-escape-string.md), taking into account
the current character set of the connection, and the result is wrapped in
single quotes. The returned value must therefore be inserted into the
query without adding any further quotes around it.

Unlike [mysqli::real\_escape\_string()](mysqli.real-escape-string.md), the result is
also safe when the `NO_BACKSLASH_ESCAPES` SQL mode is
enabled on the connection.

**Cuidado**

# Security: the default character set

The character set must be set either at the server level, or with
the API function [mysqli\_set\_charset()](mysqli.set-charset.md) for it to affect
**mysqli\_quote\_string()**. See the concepts section
on [character sets](mysqlinfo.concepts.charset.md) for
more information.

> **Nota**:
>
> Quoting is only suitable for string literals. It does not make
> identifiers, such as table or column names, safe. Whenever possible, use
> [prepared
> statements](mysqli.quickstart.prepared-statements.md) instead of building queries manually.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`string`
:   The string to be quoted and escaped.

    Characters encoded are `NUL (ASCII 0)`,
    `\n`, `\r`, `\`,
    `'`, `"`, and
    `CTRL+Z`.
    If the `NO_BACKSLASH_ESCAPES` SQL mode is enabled on
    the connection, only `'` is encoded, by doubling it.

### Valor Retornado

Returns the escaped string enclosed in single quotes.

### Examples

**Exemplo #1 **mysqli::quote\_string()** example**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$city = "'s-Hertogenbosch";

/* this query with quoted $city will work */
$query = sprintf("SELECT CountryCode FROM City WHERE name=%s", $mysqli->quote_string($city));
$result = $mysqli->query($query);
printf("Select returned %d rows.\n", $result->num_rows);

/* this query will fail, because we didn't quote and escape $city */
$query = sprintf("SELECT CountryCode FROM City WHERE name='%s'", $city);
$result = $mysqli->query($query);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$city = "'s-Hertogenbosch";

/* this query with quoted $city will work */
$query = sprintf("SELECT CountryCode FROM City WHERE name=%s", mysqli_quote_string($mysqli, $city));
$result = mysqli_query($mysqli, $query);
printf("Select returned %d rows.\n", mysqli_num_rows($result));

/* this query will fail, because we didn't quote and escape $city */
$query = sprintf("SELECT CountryCode FROM City WHERE name='%s'", $city);
$result = mysqli_query($mysqli, $query);
```

Os exemplos acima produzirão
algo semelhante a:

```
Select returned 1 rows.

Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 's-Hertogenbosch'' at line 1 in...
```

### Veja também

- [mysqli::real\_escape\_string()](mysqli.real-escape-string.md) - Escape caracteres especiais em uma string para uso em uma instrução SQL, levando em consideração o conjunto de caracteres atual da conexão
- [mysqli::set\_charset()](mysqli.set-charset.md) - Define o conjunto de caracteres do cliente

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
