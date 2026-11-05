# Retorna o nome do tipo de dados de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-field-type.php

---

# oci\_field\_type

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_field\_type — Retorna o nome do tipo de dados de um campo

### Descrição

function **oci\_field\_type**([resource](language.types.resource.md) `$statement`, [string](language.types.string.md)|[int](language.types.integer.md) `$column`): [string](language.types.string.md)|[int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o nome do tipo de dados de um campo.

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

`column`
:   Pode ser o índice do campo (baseado em 1) ou o nome.

### Valor Retornado

Retorna o tipo de dados do campo como [string](language.types.string.md) ou [int](language.types.integer.md), ou **`false`** em caso de falha

### Examples

**Exemplo #1 Exemplo de **oci\_field\_type()****

```
<?php

// Crie a tabela com:
//   CREATE TABLE mytab (number_col NUMBER, varchar2_col varchar2(1),
//                       clob_col CLOB, date_col DATE);

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM mytab");
oci_execute($stid, OCI_DESCRIBE_ONLY); // Use OCI_DESCRIBE_ONLY se não estiver buscando linhas

echo "<table border=\"1\">\n";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Tipo</th>";
echo "<th>Comprimento</th>";
echo "</tr>\n";

$ncols = oci_num_fields($stid);

for ($i = 1; $i <= $ncols; $i++) {
    $column_name  = oci_field_name($stid, $i);
    $column_type  = oci_field_type($stid, $i);
    $column_size  = oci_field_size($stid, $i);

    echo "<tr>";
    echo "<td>$column_name</td>";
    echo "<td>$column_type</td>";
    echo "<td>$column_size</td>";
    echo "</tr>\n";
}

echo "</table>\n";

// Resultado:
//    Nome           Tipo       Comprimento
//    NUMBER_COL    NUMBER        22
//    VARCHAR2_COL  VARCHAR2       1
//    CLOB_COL      CLOB        4000
//    DATE_COL      DATE           7

oci_free_statement($stid);
oci_close($conn);

?>
```

### Veja também

- [oci\_num\_fields()](function.oci-num-fields.md) - Retorna o número de colunas de resultados em uma instrução
- [oci\_field\_name()](function.oci-field-name.md) - Retorna o nome de um campo da instrução
- [oci\_field\_size()](function.oci-field-size.md) - Retorna o tamanho do campo

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
