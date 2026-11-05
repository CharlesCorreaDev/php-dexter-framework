# Retorna a próxima linha de uma consulta como um array associativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-fetch-assoc.php

---

# oci\_fetch\_assoc

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_fetch\_assoc — Retorna a próxima linha de uma consulta como um array associativo

### Descrição

function **oci\_fetch\_assoc**([resource](language.types.resource.md) `$statement`): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna um array associativo contendo a próxima linha do conjunto de resultados de uma consulta.
Cada entrada do array corresponde a uma coluna da linha. Esta função
é normalmente chamada em um laço até retornar **`false`**, indicando
que não existem mais linhas.

Chamar **oci\_fetch\_assoc()** é idêntico a
chamar [oci\_fetch\_array()](function.oci-fetch-array.md)
com **`OCI_ASSOC`**
+ **`OCI_RETURN_NULLS`**.

### Parâmetros

`statement`
:   Um identificador de declaração OCI8
    válida criada por [oci\_parse()](function.oci-parse.md) e executada
    por [oci\_execute()](function.oci-execute.md) ou um identificador de declaração `REF
    CURSOR`.

### Valor Retornado

Retorna um array associativo. Se não houver mais linhas
na `statement`, então **`false`** é retornado.

### Examples

**Exemplo #1 Exemplo de **oci\_fetch\_assoc()****

```
<?php

$conn = oci_connect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT department_id, department_name FROM departments');
oci_execute($stid);

while (($row = oci_fetch_assoc($stid)) != false) {
    echo $row['DEPARTMENT_ID'] . " " . $row['DEPARTMENT_NAME'] . "<br>\n";
}

oci_free_statement($stid);
oci_close($conn);

?>
```

### Notas

> **Nota**:
>
> Veja [oci\_fetch\_array()](function.oci-fetch-array.md) para mais exemplos de busca de linhas.

### Veja também

- [oci\_fetch()](function.oci-fetch.md) - Busca a próxima linha de uma consulta em buffers internos
- [oci\_fetch\_all()](function.oci-fetch-all.md) - Busca várias linhas de uma consulta em um array bidimensional
- [oci\_fetch\_array()](function.oci-fetch-array.md) - Retorna a próxima linha de uma consulta como um array associativo ou numérico
- [oci\_fetch\_object()](function.oci-fetch-object.md) - Retorna a próxima linha de uma consulta como um objeto
- [oci\_fetch\_row()](function.oci-fetch-row.md) - Retorna a próxima linha de uma consulta como um array numérico

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
