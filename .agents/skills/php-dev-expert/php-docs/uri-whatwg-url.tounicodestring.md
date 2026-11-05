# Recompõe a URL como uma string Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.tounicodestring.php

---

# Uri\WhatWg\Url::toUnicodeString

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::toUnicodeString — Recompõe a URL como uma [string](language.types.string.md) Unicode

### Descrição

public function **Uri\WhatWg\Url::toUnicodeString**(): [string](language.types.string.md)

Recompõe a URL como uma [string](language.types.string.md), onde o componente 'host' pode conter caracteres Unicode.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a URL recomposta como uma [string](language.types.string.md) Unicode.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::toUnicodeString()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com/foo/bar?baz");

echo $url->toUnicodeString();
?>
```

O exemplo acima produzirá:

```
https://example.com/foo/bar?baz
```

### Veja também

- [Uri\WhatWg\Url::toAsciiString()](uri-whatwg-url.toasciistring.md) - Recompõe a URL como uma string ASCII
- [Uri\Rfc3986\Uri::toRawString()](uri-rfc3986-uri.torawstring.md) - Recompõe a URI bruta
- [Uri\Rfc3986\Uri::toString()](uri-rfc3986-uri.tostring.md) - Recompõe a URI normalizada

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
