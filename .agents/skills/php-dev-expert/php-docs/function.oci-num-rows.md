# Retorna o número de linhas afetadas durante a execução da instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-num-rows.php

---

# oci\_num\_rows

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_num\_rows — Retorna o número de linhas afetadas durante a execução da instrução

### Descrição

function **oci\_num\_rows**([resource](language.types.resource.md) `$statement`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o número de linhas afetadas durante a execução da instrução.

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

### Valor Retornado

Retorna o número de linhas afetadas como um inteiro, ou **`false`** em caso de falha

### Examples

**Exemplo #1 Exemplo de **oci\_num\_rows()****

```
<?php

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, "create table emp2 as select * from employees");
oci_execute($stid);
echo oci_num_rows($stid) . " linhas inseridas.<br />\n";
oci_free_statement($stid);

$stid = oci_parse($conn, "delete from emp2");
oci_execute($stid, OCI_DEFAULT);
echo oci_num_rows($stid) . " linhas excluídas.<br />\n";
oci_commit($conn);
oci_free_statement($stid);

$stid = oci_parse($conn, "drop table emp2");
oci_execute($stid);
oci_free_statement($stid);

oci_close($conn);

?>
```

### Notas

> **Nota**:
>
> Esta função *não* retorna o número de linhas selecionadas!
> Para instruções SELECT, esta função retornará o número de linhas que foram
> buscadas no buffer com as funções **oci\_fetch\*()**.

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
