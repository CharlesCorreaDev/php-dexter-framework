# Busca todas as linhas de um resultado como um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-fetch-all.php

---

# pg\_fetch\_all

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_fetch\_all — Busca todas as linhas de um resultado como um array

### Descrição

function **pg\_fetch\_all**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$mode` = **`PGSQL_ASSOC`**): [array](language.types.array.md)

**pg\_fetch\_all()** retorna um array que
contém todas as linhas (registros) na instância [PgSql\Result](class.pgsql-result.md).

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`mode`
:   Um parâmetro opcional que controla como o [array](language.types.array.md) retornado será indexado.
    `mode` é uma constante e pode assumir os seguintes valores:
    **`PGSQL_ASSOC`**, **`PGSQL_NUM`** e **`PGSQL_BOTH`**.
    Usando **`PGSQL_NUM`**, a função retornará um array com índices numéricos,
    usando **`PGSQL_ASSOC`** ela retornará apenas índices associativos
    enquanto **`PGSQL_BOTH`** retornará índices numéricos e associativos.

### Valor Retornado

Um [array](language.types.array.md) com todas as linhas no resultado. Cada linha é um array
de valores de campo indexados pelo nome do campo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.0.0 | **pg\_fetch\_all()** agora retornará um [array](language.types.array.md) em vez de **`false`** para conjuntos de resultados com zero linhas. |
| 7.1.0 | O parâmetro `mode` foi adicionado. |

### Examples

**Exemplo #1 PostgreSQL busca tudo**

```
<?php
$conn = pg_pconnect("dbname=publisher");
if (!$conn) {
    echo "Ocorreu um erro.\n";
    exit;
}

$result = pg_query($conn, "SELECT * FROM authors");
if (!$result) {
    echo "Ocorreu um erro.\n";
    exit;
}

$arr = pg_fetch_all($result);

print_r($arr);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [id] => 1
            [name] => Fred
        )

    [1] => Array
        (
            [id] => 2
            [name] => Bob
        )

)
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
