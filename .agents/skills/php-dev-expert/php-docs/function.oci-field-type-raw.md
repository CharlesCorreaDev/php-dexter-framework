# Informa o tipo bruto de dados do Oracle de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-field-type-raw.php

---

# oci\_field\_type\_raw

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_field\_type\_raw — Informa o tipo bruto de dados do Oracle de um campo

### Descrição

function **oci\_field\_type\_raw**([resource](language.types.resource.md) `$statement`, [string](language.types.string.md)|[int](language.types.integer.md) `$column`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o tipo bruto de dados "SQLT" do Oracle da coluna informada em `column`.

Se for necessário obter o nome do tipo de um campo, use [oci\_field\_type()](function.oci-field-type.md).

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

`column`
:   Pode ser o índice do campo (baseado em 1) ou o nome.

### Valor Retornado

Retorna o tipo de dados brutos do Oracle como um número, ou **`false`** em caso de falha

### Examples

**Exemplo #1 Exemplo de **oci\_field\_type\_raw()****

```
<?php

// Crie a tabela com:
//   CREATE TABLE mytab (number_col NUMBER, varchar2_col varchar2(1), clob_col CLOB, date_col DATE);

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, 'select * from mytab');
oci_execute($stid, OCI_DESCRIBE_ONLY);  // Use OCI_DESCRIBE_ONLY se não estiver buscando linhas
$n = oci_num_fields($stid);
for ($i = 1; $i <= $n; ++$i) {
    echo oci_field_name($stid, $i) . " é do tipo bruto: " . oci_field_type_raw($stid, $i) . "<br>\n";
}

// Resultado:
//    NUMBER_COL é do tipo bruto: 2
//    VARCHAR2_COL é do tipo bruto: 1
//    CLOB_COL é do tipo bruto: 112
//    DATE_COL é do tipo bruto: 12

oci_free_statement($stid);
oci_close($conn);

?>
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
