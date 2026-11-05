# Retorna o nome de um campo da instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-field-name.php

---

# oci\_field\_name

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_field\_name — Retorna o nome de um campo da instrução

### Descrição

function **oci\_field\_name**([resource](language.types.resource.md) `$statement`, [string](language.types.string.md)|[int](language.types.integer.md) `$column`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome da coluna informada em `column`.

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

`column`
:   Pode ser o índice do campo (baseado em 1) ou o nome.

### Valor Retornado

Retorna o nome como uma string, ou **`false`** em caso de falha

### Examples

**Exemplo #1 Exemplo de **oci\_field\_name()****

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

    echo "<tr>";
    echo "<td>$column_name</td>";
    echo "<td>$column_type</td>";
    echo "</tr>\n";
}

echo "</table>\n";

// Resultado:
//    Nome           Tipo
//    NUMBER_COL    NUMBER
//    VARCHAR2_COL  VARCHAR2
//    CLOB_COL      CLOB
//    DATE_COL      DATE

oci_free_statement($stid);
oci_close($conn);

?>
```

### Veja também

- [oci\_num\_fields()](function.oci-num-fields.md) - Retorna o número de colunas de resultados em uma instrução
- [oci\_field\_type()](function.oci-field-type.md) - Retorna o nome do tipo de dados de um campo
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
