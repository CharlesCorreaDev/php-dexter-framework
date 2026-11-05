# Obtém o número de linhas no resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-num-rows.php

---

# cubrid\_num\_rows

(PECL CUBRID >= 8.3.0)

cubrid\_num\_rows — Obtém o número de linhas no resultado

### Descrição

function **cubrid\_num\_rows**([resource](language.types.resource.md) `$result`): [int](language.types.integer.md)

A função **cubrid\_num\_rows()** é usada para obter o
número de linhas do resultado da consulta.
Pode ser usada para instruções `SELECT`.
Para instruções `INSERT`, `UPDATE`, ou `DELETE`,
use a função [cubrid\_affected\_rows()](function.cubrid-affected-rows.md).

Nota: a função **cubrid\_num\_rows()** somente pode ser usada
para consulta síncrona; retorna 0 quando usada para consulta assíncrona.

### Parâmetros

`result`
:   `result` vem de uma chamada a
    [cubrid\_execute()](function.cubrid-execute.md), [cubrid\_query()](function.cubrid-query.md) ou
    [cubrid\_prepare()](function.cubrid-prepare.md)

### Valor Retornado

Número de linhas em caso de sucesso.

0 quando a consulta for feita em modo assíncrono.

-1, se a instrução SQL não for SELECT.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_num\_rows()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");

$req = cubrid_execute($conn, "SELECT * FROM code");

$row_num = cubrid_num_rows($req);
$col_num = cubrid_num_cols($req);

printf("Número de linhas: %d\nNúmero de colunas: %d\n", $row_num, $col_num);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Número de linhas: 6
Número de colunas: 2
```

### Veja também

- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL
- [cubrid\_num\_cols()](function.cubrid-num-cols.md) - Retorna o número de colunas no resultado
- [cubrid\_affected\_rows()](function.cubrid-affected-rows.md) - Retorna o número de linhas afetadas pela última instrução SQL

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
