# Recompõe a URL como uma string ASCII

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.toasciistring.php

---

# Uri\WhatWg\Url::toAsciiString

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::toAsciiString — Recompõe a URL como uma [string](language.types.string.md) ASCII

### Descrição

public function **Uri\WhatWg\Url::toAsciiString**(): [string](language.types.string.md)

Recompõe a URL como uma [string](language.types.string.md) ASCII, usando transcrição 'punycode' em vez de caracteres Unicode no
componente 'host'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a URL recomposta como uma [string](language.types.string.md) ASCII.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::toAsciiString()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com/foo/bar?baz");

echo $url->toAsciiString();
?>
```

O exemplo acima produzirá:

```
https://example.com/foo/bar?baz
```

### Veja também

- [Uri\WhatWg\Url::toUnicodeString()](uri-whatwg-url.tounicodestring.md) - Recompõe a URL como uma string Unicode
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
