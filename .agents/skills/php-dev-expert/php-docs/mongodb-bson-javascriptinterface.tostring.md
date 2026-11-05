# Retorna o código da JavascriptInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-javascriptinterface.tostring.php

---

# MongoDB\BSON\JavascriptInterface::\_\_toString

(mongodb >=1.3.0)

MongoDB\BSON\JavascriptInterface::\_\_toString — Retorna o código da JavascriptInterface

### Descrição

abstract public function **MongoDB\BSON\JavascriptInterface::\_\_toString**(): [string](language.types.string.md)

Este método é um apelido para: [MongoDB\BSON\JavascriptInterface::getCode()](mongodb-bson-javascriptinterface.getcode.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código da JavascriptInterface.

### Veja também

- [MongoDB\BSON\JavascriptInterface::getCode()](mongodb-bson-javascriptinterface.getcode.md) - Retorna o código da JavascriptInterface
- [MongoDB\BSON\Javascript::\_\_toString()](mongodb-bson-javascript.tostring.md) - Retorna o código do Javascript

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
