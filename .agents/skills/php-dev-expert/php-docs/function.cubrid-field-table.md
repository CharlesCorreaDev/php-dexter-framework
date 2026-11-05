# Retorna o nome da tabela do campo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-field-table.php

---

# cubrid\_field\_table

(PECL CUBRID >= 8.3.0)

cubrid\_field\_table — Retorna o nome da tabela do campo especificado

### Descrição

function **cubrid\_field\_table**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset`): [string](language.types.string.md)

Esta função retorna o nome da tabela do campo especificado. Isso é útil ao usar consultas de seleções grandes com JOINS.

### Parâmetros

`result`
:   `result` vem de uma chamada a
    [cubrid\_execute()](function.cubrid-execute.md)

`field_offset`
:   A posição numérica do campo. O `field_offset`
    começa em 0. Se `field_offset` não existir, um
    erro de nível **`E_WARNING`** será emitido.

### Valor Retornado

Nome da tabela do campo especificado, em caso de sucesso.

**`false`** em caso de field\_offset com valor inválido.

-1 se a instrução SQL não for SELECT.

### Examples

**Exemplo #1 Exemplo de **cubrid\_field\_table()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$result = cubrid_execute($conn, "SELECT * FROM code");

$col_num = cubrid_num_cols($result);

printf("%-16s %-15s %s\n", "Tabela do Campo", "Nome do Campo", "Tipo do Campo");
for($i = 0; $i < $col_num; $i++) {
    printf("%-16s %-15s %s\n",
        cubrid_field_table($result, $i), cubrid_field_name($result, $i), cubrid_field_type($result, $i));
}

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Tabela do Campo  Nome do Campo   Tipo do Campo
code             s_name          char
code             f_name          varchar
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
