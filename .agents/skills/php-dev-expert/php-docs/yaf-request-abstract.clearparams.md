# Remove todos os parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.clearparams.php

---

# Yaf\_Request\_Abstract::clearParams

(Yaf >=3.2.0)

Yaf\_Request\_Abstract::clearParams — Remove todos os parâmetros

### Descrição

public function **Yaf\_Request\_Abstract::clearParams**(): [bool](language.types.boolean.md)

Remove todos os parâmetros definidos pelo roteador ou por [Yaf\_Request\_Abstract::setParam()](yaf-request-abstract.setparam.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

[bool](language.types.boolean.md)

### Veja também

- [Yaf\_Request\_Abstract::isHead()](yaf-request-abstract.ishead.md) - Informa se a requisição é HEAD
- [Yaf\_Request\_Abstract::isGet()](yaf-request-abstract.isget.md) - Informa se a requisição é GET
- [Yaf\_Request\_Abstract::isPost()](yaf-request-abstract.ispost.md) - Informa se a requisição é POST
- [Yaf\_Request\_Abstract::isPut()](yaf-request-abstract.isput.md) - Informa se a requisição é PUT
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
