# Retorna o tipo de uma instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-statement-type.php

---

# oci\_statement\_type

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_statement\_type — Retorna o tipo de uma instrução

### Descrição

function **oci\_statement\_type**([resource](language.types.resource.md) `$statement`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma palavra-chave que identifica o tipo da
instrução do OCI8 informada em `statement`.

### Parâmetros

`statement`
:   Um identificador de instrução OCI8 válido de [oci\_parse()](function.oci-parse.md).

### Valor Retornado

Retorna o tipo da instrução informada em `statement` como uma das
seguintes strings.

**Tipo de instrução**

| String de retorno | Notas |
| --- | --- |
| `ALTER` |  |
| `BEGIN` |  |
| `CALL` |  |
| `CREATE` |  |
| `DECLARE` |  |
| `DELETE` |  |
| `DROP` |  |
| `INSERT` |  |
| `SELECT` |  |
| `UPDATE` |  |
| `UNKNOWN` |  |

Retorna **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **oci\_statement\_type()****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');

$stid = oci_parse($conn, 'DELETE FROM departments WHERE department_id = 130;');
if (oci_statement_type($stid) == "DELETE") {
    trigger_error('You are not allowed to delete from this table', E_USER_ERROR);
}
else {
    oci_execute($stid);  // exclui a linha
}

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
