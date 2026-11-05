# Retorna o número de linhas afetadas pela operação MySQL anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.affected-rows.php

---

# mysqli::$affected\_rows

# mysqli\_affected\_rows

(PHP 5, PHP 7, PHP 8)

mysqli::$affected\_rows -- mysqli\_affected\_rows — Retorna o número de linhas afetadas pela operação MySQL anterior

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md)|[string](language.types.string.md) [$mysqli->affected\_rows](mysqli.affected-rows.md);

Estilo procedural

function **mysqli\_affected\_rows**([mysqli](class.mysqli.md) `$mysql`): [int](language.types.integer.md)|[string](language.types.string.md)

Retorna o número de linhas afetadas pelo último comando `INSERT`,
`UPDATE`, `REPLACE` ou
`DELETE`.
Funciona como [mysqli\_num\_rows()](mysqli-result.num-rows.md) para
consultas `SELECT`.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Um inteiro maior do que zero indica o número de linhas afetadas ou
obtidas. Zero indica que nenhum registro foi atualizado
por uma declaração `UPDATE`, nenhuma linha correspondeu à
claúsula `WHERE` na consulta ou que nenhuma consulta foi
executada ainda. `-1` indica que a consulta retornou um erro ou
que **mysqli\_affected\_rows()** foi chamada para uma consulta
`SELECT` sem buffer.

> **Nota**:
>
> Se o número de linhas afetadas for maior do que o maior valor inteiro
> (**`PHP_INT_MAX`**), o número de linhas afetadas será
> retornado como uma string.

### Examples

**Exemplo #1 Exemplo de $mysqli->affected\_rows**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* Insert rows */
$mysqli->query("CREATE TABLE Language SELECT * from CountryLanguage");
printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows);

$mysqli->query("ALTER TABLE Language ADD Status int default 0");

/* update rows */
$mysqli->query("UPDATE Language SET Status=1 WHERE Percentage > 50");
printf("Affected rows (UPDATE): %d\n", $mysqli->affected_rows);

/* delete rows */
$mysqli->query("DELETE FROM Language WHERE Percentage < 50");
printf("Affected rows (DELETE): %d\n", $mysqli->affected_rows);

/* select all rows */
$result = $mysqli->query("SELECT CountryCode FROM Language");
printf("Affected rows (SELECT): %d\n", $mysqli->affected_rows);

/* Delete table Language */
$mysqli->query("DROP TABLE Language");
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* Insert rows */
mysqli_query($link, "CREATE TABLE Language SELECT * from CountryLanguage");
printf("Affected rows (INSERT): %d\n", mysqli_affected_rows($link));

mysqli_query($link, "ALTER TABLE Language ADD Status int default 0");

/* update rows */
mysqli_query($link, "UPDATE Language SET Status=1 WHERE Percentage > 50");
printf("Affected rows (UPDATE): %d\n", mysqli_affected_rows($link));

/* delete rows */
mysqli_query($link, "DELETE FROM Language WHERE Percentage < 50");
printf("Affected rows (DELETE): %d\n", mysqli_affected_rows($link));

/* select all rows */
$result = mysqli_query($link, "SELECT CountryCode FROM Language");
printf("Affected rows (SELECT): %d\n", mysqli_affected_rows($link));

/* Delete table Language */
mysqli_query($link, "DROP TABLE Language");
```

Os exemplos acima produzirão:

```
Affected rows (INSERT): 984
Affected rows (UPDATE): 168
Affected rows (DELETE): 815
Affected rows (SELECT): 169
```

### Veja também

- [mysqli\_num\_rows()](mysqli-result.num-rows.md) - Obtém o número de linhas no resultado
- [mysqli\_info()](mysqli.info.md) - Recupera informação sobre a recente consulta executada

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
