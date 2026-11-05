# Retorna o número de colunas no conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-num-fields.php

---

# cubrid\_num\_fields

(PECL CUBRID >= 8.3.0)

cubrid\_num\_fields — Retorna o número de colunas no conjunto de resultados

### Descrição

function **cubrid\_num\_fields**([resource](language.types.resource.md) `$result`): [int](language.types.integer.md)

Esta função retorna o número de colunas no conjunto de resultados em caso de sucesso
ou FALSE em caso de falha.

### Parâmetros

`result`
:   `result` vem de uma chamada a
    [cubrid\_execute()](function.cubrid-execute.md), [cubrid\_query()](function.cubrid-query.md)
    e [cubrid\_prepare()](function.cubrid-prepare.md)

### Valor Retornado

Número de colunas em caso de sucesso.

-1 se a instrução SQL não for SELECT.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_num\_fields()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

$req = cubrid_execute($conn, "SELECT * FROM code");

$row_num = cubrid_num_rows($req);
$col_num = cubrid_num_fields($req);

printf("Número de linhas: %d\nNúmero de colunas: %d\n", $row_num, $col_num);

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Número de linhas: 6
Número de colunas: 2
```

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
