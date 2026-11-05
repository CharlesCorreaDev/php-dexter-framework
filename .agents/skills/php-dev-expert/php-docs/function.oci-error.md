# Retorna o último erro encontrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-error.php

---

# oci\_error

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_error — Retorna o último erro encontrado

### Descrição

function **oci\_error**([?](language.types.null.md)[resource](language.types.resource.md) `$connection_or_statement` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna o último erro encontrado.

A função deve ser chamada imediatamente após a ocorrência de um erro.
Os erros são limpos por uma instrução bem-sucedida.

### Parâmetros

`connection_or_statement`
:   Para a maioria dos erros, `connection_or_statement` é o
    identificador de recurso que foi passado para a chamada de função com falha.
    Para erros de conexão com [oci\_connect()](function.oci-connect.md),
    [oci\_new\_connect()](function.oci-new-connect.md) ou
    [oci\_pconnect()](function.oci-pconnect.md) **`null`** deve se passado.

### Valor Retornado

Se nenhum erro for encontrado, **oci\_error()** retornará
**`false`**. Caso contrário, **oci\_error()** retornará
as informações do erro como um array associativo.

**Descrição do array de **oci\_error()****

| Chave do array | Tipo | Descrição |
| --- | --- | --- |
| `code` | [int](language.types.integer.md) | O número de erro do Oracle. |
| `message` | [string](language.types.string.md) | O texto de erro do Oracle. |
| `offset` | [int](language.types.integer.md) | A posição do byte de um erro na instrução SQL. Se não houver nenhuma instrução, o valor será `0`. |
| `sqltext` | [string](language.types.string.md) | O texto da instrução SQL. Se não houver instrução, será uma string vazia. |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0, PECL OCI8 3.0.0 | `connection_or_statement` agora é anulável. |

### Examples

**Exemplo #1 Exibindo a mensagem de erro do Oracle após um erro de conexão**

```
<?php
$conn = oci_connect("hr", "welcome", "localhost/XE");
if (!$conn) {
    $e = oci_error();   // Para erros oci_connect não informe um identificador
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
?>
```

**Exemplo #2 Exibindo a mensagem de erro do Oracle após um erro de análise**

```
<?php
$stid = oci_parse($conn, "select ' from dual");  // observe aspas incompatíveis
if (!$stid) {
    $e = oci_error($conn);  // Para erros oci_parse passe o identificador de conexão
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}
?>
```

**Exemplo #3 Exibindo a mensagem de erro do Oracle, a instrução problemática
e a posição do problema de um erro de execução**

```
<?php
$stid = oci_parse($conn, "select does_not_exist from dual");
$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($stid);  // Para erros oci_execute passe o identificador de instrução
    print htmlentities($e['message']);
    print "\n<pre>\n";
    print htmlentities($e['sqltext']);
    printf("\n%".($e['offset']+1)."s", "^");
    print  "\n</pre>\n";
}
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
