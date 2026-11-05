# Retorna o código da JavascriptInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-javascriptinterface.getcode.php

---

# MongoDB\BSON\JavascriptInterface::getCode

(mongodb >=1.3.0)

MongoDB\BSON\JavascriptInterface::getCode — Retorna o código da JavascriptInterface

### Descrição

abstract public function **MongoDB\BSON\JavascriptInterface::getCode**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código da JavascriptInterface.

### Veja também

- [MongoDB\BSON\Javascript::getCode()](mongodb-bson-javascript.getcode.md) - Retorna o código do Javascript

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
