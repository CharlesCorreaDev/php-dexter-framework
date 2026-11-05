# Obtém o tipo XML-RPC para um valor PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xmlrpc-get-type.php

---

# xmlrpc\_get\_type

(PHP 4 >= 4.1.0, PHP 5, PHP 7)

xmlrpc\_get\_type — Obtém o tipo XML-RPC para um valor PHP

### Descrição

function **xmlrpc\_get\_type**([mixed](language.types.mixed.md) `$value`): [string](language.types.string.md)

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

Essa função é especialmente útil para strings datetime e base64.

### Parâmetros

`value`
:   Valor PHP

### Valor Retornado

Retorna o tipo XML-RPC.

### Examples

**Exemplo #1 Exemplo de tipo XML-RPC**

```
<?php
echo xmlrpc_get_type(null) . "\n"; // base64
echo xmlrpc_get_type(false) . "\n"; // boolean
echo xmlrpc_get_type(1) . "\n"; // int
echo xmlrpc_get_type(1.0) . "\n"; // double
echo xmlrpc_get_type("") . "\n"; // string
echo xmlrpc_get_type(array()) . "\n"; // array
echo xmlrpc_get_type(new stdClass) . "\n"; // array
echo xmlrpc_get_type(STDIN) . "\n"; // int
?>
```

### Veja também

- [xmlrpc\_set\_type()](function.xmlrpc-set-type.md) - Define o tipo xmlrpc, base64 ou datetime, para um valor string PHP

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
