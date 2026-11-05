# Busca todas as linhas em uma determinada coluna de resultado como um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-fetch-all-columns.php

---

# pg\_fetch\_all\_columns

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_fetch\_all\_columns — Busca todas as linhas em uma determinada coluna de resultado como um array

### Descrição

function **pg\_fetch\_all\_columns**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$field` = 0): [array](language.types.array.md)

**pg\_fetch\_all\_columns()** retorna um array que
contém todas as linhas (registros) em uma determinada coluna da instância [PgSql\Result](class.pgsql-result.md).

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`field`
:   Número da coluna. O padrão é a primeira coluna se não for especificado.

### Valor Retornado

Um [array](language.types.array.md) com todos os valores na coluna de resultados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_fetch\_all\_columns()****

```
<?php
$conn = pg_pconnect("dbname=publisher");
if (!$conn) {
  echo "Ocorreu um erro.\n";
  exit;
}

$result = pg_query($conn, "SELECT title, name, address FROM authors");
if (!$result) {
  echo "Ocorreu um erro.\n";
  exit;
}

// Obtém um array de todos os nomes de autores
$arr = pg_fetch_all_columns($result, 1);

var_dump($arr);

?>
```

### Veja também

- [pg\_fetch\_all()](function.pg-fetch-all.md) - Busca todas as linhas de um resultado como um array

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
