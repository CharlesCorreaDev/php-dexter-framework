# Serializa o objeto Uri

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.serialize.php

---

# Uri\Rfc3986\Uri::\_\_serialize

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::\_\_serialize — Serializa o objeto Uri

### Descrição

public function **Uri\Rfc3986\Uri::\_\_serialize**(): [array](language.types.array.md)

Serializa o objeto [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a URI serializada como uma [string](language.types.string.md).

### Veja também

- [Uri\Rfc3986\Uri::\_\_unserialize()](uri-rfc3986-uri.unserialize.md) - Desserializa o parâmetro 'data' em um objeto Uri
- [Uri\WhatWg\Url::\_\_serialize()](uri-whatwg-url.serialize.md) - Serializa o objeto Url

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
