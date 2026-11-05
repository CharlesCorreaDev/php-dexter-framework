# Decodifica XML para tipos nativos do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xmlrpc-decode.php

---

# xmlrpc\_decode

(PHP 4 >= 4.1.0, PHP 5, PHP 7)

xmlrpc\_decode — Decodifica XML para tipos nativos do PHP

### Descrição

function **xmlrpc\_decode**([string](language.types.string.md) `$xml`, [string](language.types.string.md) `$encoding` = "iso-8859-1"): [mixed](language.types.mixed.md)

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Parâmetros

`xml`
:   Resposta XML retornada por método XMLRPC.

`encoding`
:   Codificação da entrada suportada por iconv.

### Valor Retornado

Retorna ou um array, ou um inteiro, ou uma string, ou um booleano de acordo
com a resposta retornada via XMLRPC.

### Examples

Veja exemplos em [xmlrpc\_encode\_request()](function.xmlrpc-encode-request.md).

### Veja também

- [xmlrpc\_encode\_request()](function.xmlrpc-encode-request.md) - Gera XML para uma requisição de método
- [xmlrpc\_is\_fault()](function.xmlrpc-is-fault.md) - Determina se um valor de array representa uma falha XML-RPC

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
