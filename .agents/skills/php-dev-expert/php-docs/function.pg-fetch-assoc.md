# Busca uma linha como um array associativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-fetch-assoc.php

---

# pg\_fetch\_assoc

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_fetch\_assoc — Busca uma linha como um array associativo

### Descrição

function **pg\_fetch\_assoc**([PgSql\Result](class.pgsql-result.md) `$result`, [?](language.types.null.md)[int](language.types.integer.md) `$row` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**pg\_fetch\_assoc()** retorna um array associativo que
corresponde à linha buscada (registros).

**pg\_fetch\_assoc()** é equivalente a chamar
[pg\_fetch\_array()](function.pg-fetch-array.md) com **`PGSQL_ASSOC`** como o
terceiro parâmetro opcional. Ele retorna apenas um array associativo.
Se você precisar dos índices numéricos, use
[pg\_fetch\_row()](function.pg-fetch-row.md).

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

**pg\_fetch\_assoc()** NÃO é significativamente
mais lento do que usar [pg\_fetch\_row()](function.pg-fetch-row.md) e
é significativamente mais fácil de usar.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`row`
:   Número da linha no resultado a ser buscado. As linhas são numeradas de 0 para cima. Se
    omitido ou **`null`**, a próxima linha será buscada.

### Valor Retornado

Um [array](language.types.array.md) indexado associativamente (por nome de campo).
Cada valor no [array](language.types.array.md) é representado como uma
[string](language.types.string.md). Os valores `NULL` do banco de
dados são retornados como **`null`**.

**`false`** é retornado se `row` exceder o número
de linhas no conjunto, não houver mais linhas ou em qualquer outro erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_fetch\_assoc()****

```
<?php
$conn = pg_connect("dbname=publisher");
if (!$conn) {
  echo "Ocorreu um erro.\n";
  exit;
}

$result = pg_query($conn, "SELECT id, author, email FROM authors");
if (!$result) {
  echo "Ocorreu um erro.\n";
  exit;
}

while ($row = pg_fetch_assoc($result)) {
  echo $row['id'];
  echo $row['author'];
  echo $row['email'];
}
?>
```

### Veja também

- [pg\_fetch\_row()](function.pg-fetch-row.md) - Obtém uma linha como um array enumerado
- [pg\_fetch\_array()](function.pg-fetch-array.md) - Busca uma linha como um array
- [pg\_fetch\_object()](function.pg-fetch-object.md) - Busca uma linha como um objeto
- [pg\_fetch\_result()](function.pg-fetch-result.md) - Retorna valores de uma instância de resultado

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
