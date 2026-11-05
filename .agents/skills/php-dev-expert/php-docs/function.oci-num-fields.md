# Retorna o número de colunas de resultados em uma instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-num-fields.php

---

# oci\_num\_fields

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_num\_fields — Retorna o número de colunas de resultados em uma instrução

### Descrição

function **oci\_num\_fields**([resource](language.types.resource.md) `$statement`): [int](language.types.integer.md)

Obtém o número de colunas na instrução fornecida em `statement`.

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

### Valor Retornado

Retorna o número de colunas como um [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo de **oci\_num\_fields()****

```
<?php

// Crie a tabela com:
//   CREATE TABLE mytab (id NUMBER, quantity NUMBER);

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM mytab");
oci_execute($stid, OCI_DESCRIBE_ONLY); // Use OCI_DESCRIBE_ONLY se não estiver buscando linhas

$ncols = oci_num_fields($stid);
for ($i = 1; $i <= $ncols; $i++) {
    echo oci_field_name($stid, $i) . " " . oci_field_type($stid, $i) . "<br>\n";
}

// Resultado:
//    ID NUMBER
//    QUANTITY NUMBER

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
