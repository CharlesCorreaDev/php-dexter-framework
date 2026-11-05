# Obtém nomes de colunas no resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-column-names.php

---

# cubrid\_column\_names

(PECL CUBRID >= 8.3.0)

cubrid\_column\_names — Obtém nomes de colunas no resultado

### Descrição

function **cubrid\_column\_names**([resource](language.types.resource.md) `$req_identifier`): [array](language.types.array.md)

A função **cubrid\_column\_names()** é usada para obter os
nomes das colunas do resultado da consulta usando o identificador de requisição informado em `req_identifier`.

### Parâmetros

`req_identifier`
:   Identificador de requisição.

### Valor Retornado

Array de strings contendo os nomes de colunas em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_column\_names()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb", "dba");
$result = cubrid_execute($conn, "SELECT * FROM game WHERE host_year=2004 AND nation_code='AUS' AND medal='G'");

$column_names = cubrid_column_names($result);
$column_types = cubrid_column_types($result);

printf("%-30s %-30s %-15s\n", "Nomes das Colunas", "Tipos das Colunas", "Comp. Máx. das Colunas");
for($i = 0, $size = count($column_names); $i < $size; $i++) {
    $column_len = cubrid_field_len($result, $i);
    printf("%-30s %-30s %-15s\n", $column_names[$i], $column_types[$i], $column_len);
}

cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
Nomes das Colunas              Tipos das Colunas              Comp. Máx. das Colunas
host_year                      integer                        11
event_code                     integer                        11
athlete_code                   integer                        11
stadium_code                   integer                        11
nation_code                    char                           3
medal                          char                           1
game_date                      date                           10
```

### Veja também

- [cubrid\_prepare()](function.cubrid-prepare.md) - Prepara uma instrução SQL para execução
- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL
- [cubrid\_column\_types()](function.cubrid-column-types.md) - Obtém tipos de colunas no resultado

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
