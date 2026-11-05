# Informa se a requisição é PUT

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.isput.php

---

# Yaf\_Request\_Abstract::isPut

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::isPut — Informa se a requisição é PUT

### Descrição

public function **Yaf\_Request\_Abstract::isPut**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um booleano.

### Veja também

- [Yaf\_Request\_Abstract::isHead()](yaf-request-abstract.ishead.md) - Informa se a requisição é HEAD
- [Yaf\_Request\_Abstract::isCli()](yaf-request-abstract.iscli.md) - Informa se é uma requisição CLI
- [Yaf\_Request\_Abstract::isPost()](yaf-request-abstract.ispost.md) - Informa se a requisição é POST
- [Yaf\_Request\_Abstract::isGet()](yaf-request-abstract.isget.md) - Informa se a requisição é GET
- [Yaf\_Request\_Abstract::isOptions()](yaf-request-abstract.isoptions.md) - Informa se a requisição é OPTIONS
- [Yaf\_Request\_Abstract::isXmlHTTPRequest()](yaf-request-abstract.isxmlhttprequest.md) - Informa se a requisição é AJAX

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
