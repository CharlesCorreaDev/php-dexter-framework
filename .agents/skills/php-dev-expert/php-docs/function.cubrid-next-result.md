# Obtém o resultado da próxima consulta quando múltiplas instruções SQL estão sendo executadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-next-result.php

---

# cubrid\_next\_result

(PECL CUBRID >= 8.4.0)

cubrid\_next\_result — Obtém o resultado da próxima consulta quando múltiplas instruções SQL estão sendo executadas

### Descrição

function **cubrid\_next\_result**([resource](language.types.resource.md) `$result`): [bool](language.types.boolean.md)

A função **cubrid\_next\_result()** é usada para obter os
resultados da próxima consulta se múltiplas instruções SQL estiverem em execução e
a opção **`CUBRID_EXEC_QUERY_ALL`** tiver sido definida por
[cubrid\_execute()](function.cubrid-execute.md).

### Parâmetros

`result`
:   `result` vem de uma chamada a [cubrid\_execute()](function.cubrid-execute.md)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_next\_result()****

```
<?php
$conn = cubrid_connect("127.0.0.1", 33000, "demodb", "dba");

$sql_stmt = "SELECT * FROM code; SELECT * FROM history WHERE host_year=2004 AND event_code=20281";
$res = cubrid_execute($conn, $sql_stmt, CUBRID_EXEC_QUERY_ALL);

get_result_info($res);
cubrid_next_result($res);
get_result_info($res);

function get_result_info($req)
{
    printf("\n------------ get_result_info --------------------\n");

    $row_num = cubrid_num_rows($req);
    $col_num = cubrid_num_cols($req);

    $column_name_list = cubrid_column_names($req);
    $column_type_list = cubrid_column_types($req);

    $column_last_name = cubrid_field_name($req, $col_num - 1);
    $column_last_table = cubrid_field_table($req, $col_num - 1);

    $column_last_type = cubrid_field_type($req, $col_num - 1);
    $column_last_len = cubrid_field_len($req, $col_num - 1);

    $column_1_flags = cubrid_field_flags($req, 1);

    printf("%-30s %d\n", "Contagem de linhas:", $row_num);
    printf("%-30s %d\n", "Contagem de colunas:", $col_num);
    printf("\n");

    printf("%-30s %-30s %-15s\n", "Nomes das Colunas", "Tipos das Colunas", "Comprimentos das Colunas");
    printf("--------------------------------------------------------------------------------------\n");

    $size = count($column_name_list);
    for($i = 0; $i < $size; $i++) {
        $column_len = cubrid_field_len($req, $i);
        printf("%-30s %-30s %-15s\n", $column_name_list[$i], $column_type_list[$i], $column_len);
    }
    printf("\n\n");

    printf("%-30s %s\n", "Nome da última coluna:", $column_last_name);
    printf("%-30s %s\n", "Tabela da última coluna:", $column_last_table);
    printf("%-30s %s\n", "Tipo da última coluna:", $column_last_type);
    printf("%-30s %d\n", "Comprimento da última coluna:", $column_last_len);
    printf("%-30s %s\n", "Opções da segunda coluna:", $column_1_flags);

    printf("\n\n");
}
?>
```

O exemplo acima produzirá:

```
------------ get_result_info --------------------
Contagem de linhas:            6
Contagem de colunas:           2

Nomes das Colunas              Tipos das Colunas              Comprimentos das Colunas
--------------------------------------------------------------------------------------
s_name                         char                           1
f_name                         varchar                        6

Nome da última coluna:         f_name
Tabela da última coluna:       code
Tipo da última coluna:         varchar
Comprimento da última coluna:  6
Opções da segunda coluna:

------------ get_result_info --------------------
Contagem de linhas:            4
Contagem de colunas:           5

Nomes das Colunas              Tipos das Colunas              Comprimentos das Colunas
--------------------------------------------------------------------------------------
event_code                     integer                        11
athlete                        varchar                        40
host_year                      integer                        11
score                          varchar                        10
unit                           varchar                        5

Nome da última coluna:         unit
Tabela da última coluna:       history
Tipo da última coluna:         varchar
Comprimento da última coluna:  5
Opções da segunda coluna:      not_null primary_key unique_key
```

### Veja também

- [cubrid\_execute()](function.cubrid-execute.md) - Executa uma instrução preparada SQL

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
