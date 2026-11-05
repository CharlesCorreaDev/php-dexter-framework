# Aloca e retorna um novo cursor (identificador de instrução)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-new-cursor.php

---

# oci\_new\_cursor

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_new\_cursor — Aloca e retorna um novo cursor (identificador de instrução)

### Descrição

function **oci\_new\_cursor**([resource](language.types.resource.md) `$connection`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Aloca um novo identificador de instrução na conexão especificada.

### Parâmetros

`connection`
:   Um identificador de conexão Oracle, retornado por
    [oci\_connect()](function.oci-connect.md) ou [oci\_pconnect()](function.oci-pconnect.md).

### Valor Retornado

Retorna um novo identificador de instrução ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Vinculando um CURSOR REF em uma chamada de procedimento armazenado Oracle**

```
<?php

// Pré-criação:
//   create or replace procedure myproc(myrc out sys_refcursor) as
//   begin
//     open myrc for select first_name from employees;
//   end;

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$curs = oci_new_cursor($conn);
$stid = oci_parse($conn, "begin myproc(:cursbv); end;");
oci_bind_by_name($stid, ":cursbv", $curs, -1, OCI_B_CURSOR);
oci_execute($stid);

oci_execute($curs);  // Execute o CURSOR REF como um ID de instrução normal
while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo $row['FIRST_NAME'] . "<br />\n";
}

oci_free_statement($stid);
oci_free_statement($curs);
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
