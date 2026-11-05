# Recompõe a URI normalizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.tostring.php

---

# Uri\Rfc3986\Uri::toString

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::toString — Recompõe a URI normalizada

### Descrição

public function **Uri\Rfc3986\Uri::toString**(): [string](language.types.string.md)

Recompõe a URI normalizada em uma [string](language.types.string.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a URI normalizada recomposta como uma [string](language.types.string.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::toString()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com/foo/bar?baz");

echo $uri->toString();
?>
```

O exemplo acima produzirá:

```
https://example.com/foo/bar?baz
```

### Veja também

- [Uri\Rfc3986\Uri::toRawString()](uri-rfc3986-uri.torawstring.md) - Recompõe a URI bruta
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
