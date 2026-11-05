# Verifica se um campo na linha atualmente buscada é null

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-field-is-null.php

---

# oci\_field\_is\_null

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_field\_is\_null — Verifica se um campo na linha atualmente buscada é **`null`**

### Descrição

function **oci\_field\_is\_null**([resource](language.types.resource.md) `$statement`, [string](language.types.string.md)|[int](language.types.integer.md) `$column`): [bool](language.types.boolean.md)

Verifica se a `column` fornecida na linha atual de
`statement` é **`null`**.

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

`column`
:   Pode ser o índice do campo (baseado em 1) ou o nome.

### Valor Retornado

Retorna **`true`** se `column` for **`null`**, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de [oci\_field\_name()](function.oci-field-name.md)**

```
<?php

// Crie a tabela com:
//   CREATE TABLE mytab (c1 NUMBER);
//   INSERT INTO mytab VALUES (1);
//   INSERT INTO mytab VALUES (NULL);

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM mytab");
oci_execute($stid);

while (($row = oci_fetch_array($stid, OCI_RETURN_NULLS)) != false) {
    $ncols = oci_num_fields($stid);
    for ($col = 1; $col <= $ncols; $col++) {
        var_dump(oci_field_is_null($stid, $col));
    }
}

// Resultado:
//    bool(false)
//    bool(true)

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
