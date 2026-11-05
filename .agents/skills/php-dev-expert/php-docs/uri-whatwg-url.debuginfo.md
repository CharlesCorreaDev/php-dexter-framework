# Retorna o estado interno da URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.debuginfo.php

---

# Uri\WhatWg\Url::\_\_debugInfo

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::\_\_debugInfo — Retorna o estado interno da URL

### Descrição

public function **Uri\WhatWg\Url::\_\_debugInfo**(): [array](language.types.array.md)

Retorna o estado interno da URL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o estado interno da URL como um [array](language.types.array.md).

### Veja também

- [Uri\Rfc3986\Uri::\_\_debugInfo()](uri-rfc3986-uri.debuginfo.md) - Retorna o estado interno da URI

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
