# Recompõe a URI bruta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.torawstring.php

---

# Uri\Rfc3986\Uri::toRawString

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::toRawString — Recompõe a URI bruta

### Descrição

public function **Uri\Rfc3986\Uri::toRawString**(): [string](language.types.string.md)

Recompõe a URI bruta (não normalizada) em uma [string](language.types.string.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a URI bruta (não normalizada) recomposta como uma [string](language.types.string.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::toRawString()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com/foo/bar?baz");

echo $uri->toRawString();
?>
```

O exemplo acima produzirá:

```
https://example.com/foo/bar?baz
```

### Veja também

- [Uri\Rfc3986\Uri::toString()](uri-rfc3986-uri.tostring.md) - Recompõe a URI normalizada
- [Uri\WhatWg\Url::toAsciiString()](uri-whatwg-url.toasciistring.md) - Recompõe a URL como uma string ASCII
- [Uri\WhatWg\Url::toUnicodeString()](uri-whatwg-url.tounicodestring.md) - Recompõe a URL como uma string Unicode

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
