# Retorna o número de colunas no resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-num-cols.php

---

# cubrid\_num\_cols

(PECL CUBRID >= 8.3.0)

cubrid\_num\_cols — Retorna o número de colunas no resultado

### Descrição

function **cubrid\_num\_cols**([resource](language.types.resource.md) `$result`): [int](language.types.integer.md)

A função **cubrid\_num\_cols()** é usada para obter o
número de colunas do resultado da consulta. Somente pode ser usada quando a
consulta executada for uma instrução `SELECT`.

### Parâmetros

`result`
:   Resultado.

### Valor Retornado

Número de colunas em caso de sucesso.

**`false`**, se a instrução SQL não for SELECT.

### Examples

**Exemplo #1 Exemplo de **cubrid\_num\_cols()****

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
- [cubrid\_num\_rows()](function.cubrid-num-rows.md) - Obtém o número de linhas no resultado

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
