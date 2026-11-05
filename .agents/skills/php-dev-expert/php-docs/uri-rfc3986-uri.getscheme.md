# Obtém o componente scheme normalizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getscheme.php

---

# Uri\Rfc3986\Uri::getScheme

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getScheme — Obtém o componente scheme normalizado

### Descrição

public function **Uri\Rfc3986\Uri::getScheme**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'scheme' normalizado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'scheme' normalizado como uma [string](language.types.string.md) se o componente 'scheme' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getScheme()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com");

echo $uri->getScheme();
?>
```

O exemplo acima produzirá:

```
https
```

### Veja também

- [Uri\Rfc3986\Uri::getRawScheme()](uri-rfc3986-uri.getrawscheme.md) - Obtém o componente scheme bruto
- [Uri\Rfc3986\Uri::withScheme()](uri-rfc3986-uri.withscheme.md) - Modifica o componente scheme
- [Uri\WhatWg\Url::getScheme()](uri-whatwg-url.getscheme.md) - Obtém o componente scheme

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
