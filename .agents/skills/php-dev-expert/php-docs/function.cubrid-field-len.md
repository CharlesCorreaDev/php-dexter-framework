# Obtém o comprimento máximo do campo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-field-len.php

---

# cubrid\_field\_len

(PECL CUBRID >= 8.3.0)

cubrid\_field\_len — Obtém o comprimento máximo do campo especificado

### Descrição

function **cubrid\_field\_len**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_offset`): [int](language.types.integer.md)

Esta função retorna o comprimento máximo do campo especificado em caso de sucesso ou retorna FALSE em caso de falha.

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

`field_offset`
:   A posição numérica do campo. O `field_offset` começa em 0. Se `field_offset` não existir, um erro de nível **`E_WARNING`** será emitido.

### Valor Retornado

O comprimento máximo em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_field\_len()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");
$result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");

$column_names = cubrid_column_names($result);
$column_types = cubrid_column_types($result);

printf("%-30s %-30s %-15s\n", "Nomes das Colunas", "Tipos das Colunas", "Comprimento Máximo das Colunas");
for($i = 0, $size = count($column_names); $i < $size; $i++) {
    $column_len = cubrid_field_len($result, $i);
    printf("%-30s %-30s %-15s\n", $column_names[$i], $column_types[$i], $column_len);
}

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Nomes das Colunas              Tipos das Colunas              Comprimento Máximo das Colunas
host_year                      integer                        11
event_code                     integer                        11
athlete_code                   integer                        11
stadium_code                   integer                        11
nation_code                    char                           3
medal                          char                           1
game_date                      date                           10
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
