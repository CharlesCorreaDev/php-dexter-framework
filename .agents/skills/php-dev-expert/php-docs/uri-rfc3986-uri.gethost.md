# Obtém o componente host normalizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.gethost.php

---

# Uri\Rfc3986\Uri::getHost

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getHost — Obtém o componente host normalizado

### Descrição

public function **Uri\Rfc3986\Uri::getHost**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'host' normalizado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'host' normalizado como uma [string](language.types.string.md) se o componente 'host' existir, caso contrário é retornado **`null`**.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getHost()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com");

echo $uri->getHost();
?>
```

O exemplo acima produzirá:

```
example.com
```

### Veja também

- [Uri\Rfc3986\Uri::getRawHost()](uri-rfc3986-uri.getrawhost.md) - Obtém o componente host bruto
- [Uri\Rfc3986\Uri::withHost()](uri-rfc3986-uri.withhost.md) - Modifica o componente host
- [Uri\WhatWg\Url::getAsciiHost()](uri-whatwg-url.getasciihost.md) - Obtém o componente host como uma string ASCII
- [Uri\WhatWg\Url::getUnicodeHost()](uri-whatwg-url.getunicodehost.md) - Obtém o componente host como uma string Unicode

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
