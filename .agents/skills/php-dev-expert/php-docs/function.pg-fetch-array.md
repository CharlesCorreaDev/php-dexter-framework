# Busca uma linha como um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-fetch-array.php

---

# pg\_fetch\_array

(PHP 4, PHP 5, PHP 7, PHP 8)

pg\_fetch\_array — Busca uma linha como um array

### Descrição

function **pg\_fetch\_array**([PgSql\Result](class.pgsql-result.md) `$result`, [?](language.types.null.md)[int](language.types.integer.md) `$row` = **`null`**, [int](language.types.integer.md) `$mode` = **`PGSQL_BOTH`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**pg\_fetch\_array()** retorna um array que
corresponde à linha buscada (registro).

**pg\_fetch\_array()** é uma versão estendida de
[pg\_fetch\_row()](function.pg-fetch-row.md). Além de armazenar os dados nos
índices numéricos (número do campo) no array de resultados, também
pode armazenar os dados usando índices associativos (nome do campo).
Ele armazena ambos os índices por padrão.

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

**pg\_fetch\_array()** NÃO é significativamente
mais lento do que usar [pg\_fetch\_row()](function.pg-fetch-row.md) e
é significativamente mais fácil de usar.

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

Um [array](language.types.array.md) indexado numericamente (começando com 0) ou
associativamente (indexado pelo nome do campo), ou ambos.
Cada valor no [array](language.types.array.md) é representado como uma
[string](language.types.string.md). Os valores `NULL`
do banco de dados são retornados como **`null`**.

**`false`** é retornado se `row` exceder o número
de linhas no conjunto, não houver mais linhas ou em qualquer outro erro.
Buscar o resultado de uma consulta diferente de SELECT também retornará **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_fetch\_array()****

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

$arr = pg_fetch_array($result, 0, PGSQL_NUM);
echo $arr[0] . " <- Row 1 Author\n";
echo $arr[1] . " <- Row 1 E-mail\n";

// O parâmetro linha é opcional; NULL pode ser passado em vez disso,
// para passar um result_type. Chamadas sucessivas para pg_fetch_array
// retornarão a próxima linha.
$arr = pg_fetch_array($result, NULL, PGSQL_ASSOC);
echo $arr["author"] . " <- Row 2 Author\n";
echo $arr["email"] . " <- Row 2 E-mail\n";

$arr = pg_fetch_array($result);
echo $arr["author"] . " <- Row 3 Author\n";
echo $arr[1] . " <- Row 3 E-mail\n";

?>
```

### Veja também

- [pg\_fetch\_row()](function.pg-fetch-row.md) - Obtém uma linha como um array enumerado
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
