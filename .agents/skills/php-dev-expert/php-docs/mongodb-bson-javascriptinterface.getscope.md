# Retorna o documento de escopo da JavascriptInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-javascriptinterface.getscope.php

---

# MongoDB\BSON\JavascriptInterface::getScope

(mongodb >=1.3.0)

MongoDB\BSON\JavascriptInterface::getScope — Retorna o documento de escopo da JavascriptInterface

### Descrição

abstract public function **MongoDB\BSON\JavascriptInterface::getScope**(): [?](language.types.null.md)[object](language.types.object.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o documento de escopo da JavascriptInterface.

### Veja também

- [MongoDB\BSON\Javascript::getScope()](mongodb-bson-javascript.getscope.md) - Retorna o documento de escopo do Javascript

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
