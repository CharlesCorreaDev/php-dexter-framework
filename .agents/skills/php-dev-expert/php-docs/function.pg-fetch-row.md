# Obtém uma linha como um array enumerado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-fetch-row.php

---

# pg\_fetch\_row

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_fetch\_row — Obtém uma linha como um array enumerado

### Descrição

function **pg\_fetch\_row**([PgSql\Result](class.pgsql-result.md) `$result`, [?](language.types.null.md)[int](language.types.integer.md) `$row` = **`null`**, [int](language.types.integer.md) `$mode` = **`PGSQL_NUM`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**pg\_fetch\_row()** busca uma linha de dados
do resultado associado à instância `result` especificada.

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`row`
:   Número da linha no resultado a ser buscado. As linhas são numeradas de 0 para cima. Se
    omitido ou **`null`**, a próxima linha será buscada.

`mode`
:   Um parâmetro opcional que controla como o [array](language.types.array.md) retornado será indexado.
    `mode` é uma constante e pode assumir os seguintes valores:
    **`PGSQL_ASSOC`**, **`PGSQL_NUM`** e **`PGSQL_BOTH`**.
    Usando **`PGSQL_NUM`**, a função retornará um array com índices numéricos,
    usando **`PGSQL_ASSOC`** ela retornará apenas índices associativos
    enquanto **`PGSQL_BOTH`** retornará índices numéricos e associativos.

### Valor Retornado

Um [array](language.types.array.md), indexado de 0 para cima, com cada valor
representado como uma [string](language.types.string.md). Os valores `NULL`
do banco de dados são retornados como **`null`**.

**`false`** é retornado se `row` exceder o número de
linhas no conjunto, não houver mais linhas ou em qualquer outro erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_fetch\_row()****

```
<?php

$conn = pg_pconnect("dbname=publisher");
if (!$conn) {
  echo "Ocorreu um erro.\n";
  exit;
}

$result = pg_query($conn, "SELECT author, email FROM authors");
if (!$result) {
  echo "Ocorreu um erro.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "Autor: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}

?>
```

### Veja também

- [pg\_query()](function.pg-query.md) - Executa uma consulta
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
