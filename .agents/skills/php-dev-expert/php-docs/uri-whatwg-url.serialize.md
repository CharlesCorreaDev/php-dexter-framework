# Serializa o objeto Url

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.serialize.php

---

# Uri\WhatWg\Url::\_\_serialize

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::\_\_serialize — Serializa o objeto Url

### Descrição

public function **Uri\WhatWg\Url::\_\_serialize**(): [array](language.types.array.md)

Serializa o objeto [Uri\WhatWg\Url](class.uri-whatwg-url.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a URL serializada como um [array](language.types.array.md).

### Veja também

- [Uri\WhatWg\Url::\_\_unserialize()](uri-whatwg-url.unserialize.md) - Desserializa o parâmetro 'data' em um objeto Url
- [Uri\Rfc3986\Uri::\_\_serialize()](uri-rfc3986-uri.serialize.md) - Serializa o objeto Uri

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
