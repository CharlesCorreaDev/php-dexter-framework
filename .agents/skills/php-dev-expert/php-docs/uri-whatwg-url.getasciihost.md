# Obtém o componente host como uma string ASCII

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.getasciihost.php

---

# Uri\WhatWg\Url::getAsciiHost

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::getAsciiHost — Obtém o componente host como uma [string](language.types.string.md) ASCII

### Descrição

public function **Uri\WhatWg\Url::getAsciiHost**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'host' como uma [string](language.types.string.md) usando transcrição punycode em vez de caracteres Unicode.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'host' como uma [string](language.types.string.md) ASCII se o componente 'host' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::getAsciiHost()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com");

echo $url->getAsciiHost();
?>
```

O exemplo acima produzirá:

```
example.com
```

### Veja também

- [Uri\WhatWg\Url::getUnicodeHost()](uri-whatwg-url.getunicodehost.md) - Obtém o componente host como uma string Unicode
- [Uri\WhatWg\Url::withHost()](uri-whatwg-url.withhost.md) - Modifica o componente host
- [Uri\Rfc3986\Uri::getRawHost()](uri-rfc3986-uri.getrawhost.md) - Obtém o componente host bruto
- [Uri\Rfc3986\Uri::getHost()](uri-rfc3986-uri.gethost.md) - Obtém o componente host normalizado

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
