# Retorna uma string com as opções do campo informado pela posição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-field-flags.php

---

# cubrid\_field\_flags

(PECL CUBRID >= 8.3.0)

cubrid\_field\_flags — Retorna uma string com as opções do campo informado pela posição

### Descrição

function **cubrid\_field\_flags**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset`): [string](language.types.string.md)

Esta função retorna uma string com as opções do campo informado por sua posição,
separados por espaço. Pode-se dividir o valor retornado usando explode(). As
opções podem ser: **`not_null`**,
**`primary_key`**, **`unique_key`**,
**`foreign_key`**, **`auto_increment`**,
**`shared`**, **`reverse_index`**,
**`reverse_unique`** e **`timestamp`**.

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

`field_offset`
:   A posição numérica do campo. O `field_offset`
    começa em 0. Se `field_offset` não existir, um
    erro de nível **`E_WARNING`** será emitido.

### Valor Retornado

Uma string com opções em caso de sucesso.

**`false`** caso o valor de field\_offset seja inválido.

-1 se a instrução SQL não for SELECT.

### Examples

**Exemplo #1 Exemplo de **cubrid\_field\_flags()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");

$col_num = cubrid_num_cols($result);

printf("%-30s %s\n", "Nome do Campos", "Opções do Campo");
for($i = 0; $i < $col_num; $i++) {
    printf("%-30s %s\n", cubrid_field_name($result, $i), cubrid_field_flags($result, $i));
}

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Nome do Campos                 Opções do Campo
host_year                      not_null primary_key unique_key
event_code                     not_null primary_key unique_key foreign_key
athlete_code                   not_null primary_key unique_key foreign_key
stadium_code                   not_null
nation_code
medal
game_date
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
