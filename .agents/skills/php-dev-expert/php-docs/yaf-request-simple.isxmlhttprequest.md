# Informa se a requisição é Ajax

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-simple.isxmlhttprequest.php

---

# Yaf\_Request\_Simple::isXmlHttpRequest

(Yaf >=1.0.0)

Yaf\_Request\_Simple::isXmlHttpRequest — Informa se a requisição é Ajax

### Descrição

public function **Yaf\_Request\_Simple::isXmlHttpRequest**(): [void](language.types.void.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna FALSE para [Yaf\_Request\_Simple](class.yaf-request-simple.md).

### Veja também

- [Yaf\_Request\_Abstract::isXmlHTTPRequest()](yaf-request-abstract.isxmlhttprequest.md) - Informa se a requisição é AJAX
- [Yaf\_Request\_Http::isXmlHTTPRequest()](yaf-request-http.isxmlhttprequest.md) - Informa se a requisição é Ajax

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
