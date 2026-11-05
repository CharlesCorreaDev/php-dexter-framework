# Determina se um valor de array representa uma falha XML-RPC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xmlrpc-is-fault.php

---

# xmlrpc\_is\_fault

(PHP 4 >= 4.3.0, PHP 5, PHP 7)

xmlrpc\_is\_fault — Determina se um valor de array representa uma falha XML-RPC

### Descrição

function **xmlrpc\_is\_fault**([array](language.types.array.md) `$arg`): [bool](language.types.boolean.md)

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Parâmetros

`arg`
:   Array retornado por [xmlrpc\_decode()](function.xmlrpc-decode.md).

### Valor Retornado

Retorna **`true`** se o argumento significa falha, **`false`** caso contrário. Descrição
da falha está disponível em `$arg["faultString"]`, código da
falha está em `$arg["faultCode"]`.

### Examples

Veja o exemplo em [xmlrpc\_encode\_request()](function.xmlrpc-encode-request.md).

### Veja também

- [xmlrpc\_decode()](function.xmlrpc-decode.md) - Decodifica XML para tipos nativos do PHP

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
