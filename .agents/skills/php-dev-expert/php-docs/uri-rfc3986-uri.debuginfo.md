# Retorna o estado interno da URI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.debuginfo.php

---

# Uri\Rfc3986\Uri::\_\_debugInfo

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::\_\_debugInfo — Retorna o estado interno da URI

### Descrição

public function **Uri\Rfc3986\Uri::\_\_debugInfo**(): [array](language.types.array.md)

Retorna o estado interno da URI.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o estado interno da URI como um [array](language.types.array.md).

### Veja também

- [Uri\WhatWg\Url::\_\_debugInfo()](uri-whatwg-url.debuginfo.md) - Retorna o estado interno da URL

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
