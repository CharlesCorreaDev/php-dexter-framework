# Obtém o componente host como uma string Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.getunicodehost.php

---

# Uri\WhatWg\Url::getUnicodeHost

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::getUnicodeHost — Obtém o componente host como uma [string](language.types.string.md) Unicode

### Descrição

public function **Uri\WhatWg\Url::getUnicodeHost**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'host' como uma [string](language.types.string.md), que pode conter caracteres Unicode.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'host' como uma [string](language.types.string.md) Unicode se o componente 'host' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::getUnicodeHost()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com");

echo $url->getUnicodeHost();
?>
```

O exemplo acima produzirá:

```
example.com
```

### Veja também

- [Uri\WhatWg\Url::getAsciiHost()](uri-whatwg-url.getasciihost.md) - Obtém o componente host como uma string ASCII
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
