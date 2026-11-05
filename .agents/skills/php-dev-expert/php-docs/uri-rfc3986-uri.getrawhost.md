# Obtém o componente host bruto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getrawhost.php

---

# Uri\Rfc3986\Uri::getRawHost

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getRawHost — Obtém o componente host bruto

### Descrição

public function **Uri\Rfc3986\Uri::getRawHost**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'host' bruto (não normalizado).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'host' bruto como uma [string](language.types.string.md) se o componente 'host' existir, caso contrário é retornado **`null`**.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getRawHost()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com");

echo $uri->getRawHost();
?>
```

O exemplo acima produzirá:

```
example.com
```

### Veja também

- [Uri\Rfc3986\Uri::getHost()](uri-rfc3986-uri.gethost.md) - Obtém o componente host normalizado
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
