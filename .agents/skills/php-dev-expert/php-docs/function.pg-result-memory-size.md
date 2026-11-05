# Retorna a quantidade de memória alocada para um resultado de consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-result-memory-size.php

---

# pg\_result\_memory\_size

(PHP 8 >= 8.4.0)

pg\_result\_memory\_size — Retorna a quantidade de memória alocada para um resultado de consulta

### Descrição

function **pg\_result\_memory\_size**([PgSql\Result](class.pgsql-result.md) `$result`): [int](language.types.integer.md)

Retorna a quantidade de memória, em bytes, alocada para a instância do resultado de consulta
[PgSql\Result](class.pgsql-result.md).
Este valor é a mesma quantidade que seria liberada por [pg\_free\_result()](function.pg-free-result.md).

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

### Valor Retornado

Retorna a quantidade de memória em bytes.

### Examples

**Exemplo #1 Exemplo de **pg\_result\_memory\_size()****

```
<?php
$db = pg_connect("dbname=users user=me");

$res = pg_query($db, 'SELECT 1');

$size = pg_result_memory_size($res);

var_dump($size);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(3288)
```

### Veja também

- [pg\_free\_result()](function.pg-free-result.md) - Libera memória de resultados

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
