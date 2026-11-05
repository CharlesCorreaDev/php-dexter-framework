# Informa a escala do campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-field-scale.php

---

# oci\_field\_scale

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_field\_scale — Informa a escala do campo

### Descrição

function **oci\_field\_scale**([resource](language.types.resource.md) `$statement`, [string](language.types.string.md)|[int](language.types.integer.md) `$column`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna a escala da coluna com índice `column`.

Para colunas FLOAT, a precisão é diferente de zero e a escala é -127.
Se a precisão for 0, a coluna é NUMBER. Caso contrário, é
NUMBER(precisão, escala).

### Parâmetros

`statement`
:   Um identificador de instrução OCI válido.

`column`
:   Pode ser o índice do campo (baseado em 1) ou o nome.

### Valor Retornado

Retorna a escala como um inteiro, ou **`false`** em caso de falha

### Examples

**Exemplo #1 Exemplo de **oci\_field\_scale()****

```
<?php

// Crie a tabela com:
//   CREATE TABLE mytab (c1 NUMBER, c2 FLOAT, c3 NUMBER(4), c4 NUMBER(5,3));

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM mytab");
oci_execute($stid, OCI_DESCRIBE_ONLY); // Use OCI_DESCRIBE_ONLY se não estiver buscando linhas

$ncols = oci_num_fields($stid);
for ($i = 1; $i <= $ncols; $i++) {
    echo oci_field_name($stid, $i) . " "
        . oci_field_precision($stid, $i) . " "
        . oci_field_scale($stid, $i) . "<br>\n";
}

// Resultado:
//   C1    0 -127
//   C2  126 -127
//   C3    4    0
//   C4    5    3

oci_free_statement($stid);
oci_close($conn);

?>
```

### Veja também

- [oci\_field\_precision()](function.oci-field-precision.md) - Informa a precisão de um campo
- [oci\_field\_type()](function.oci-field-type.md) - Retorna o nome do tipo de dados de um campo

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
