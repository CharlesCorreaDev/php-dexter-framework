# Obtém o componente fragment normalizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getfragment.php

---

# Uri\Rfc3986\Uri::getFragment

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getFragment — Obtém o componente fragment normalizado

### Descrição

public function **Uri\Rfc3986\Uri::getFragment**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'fragment' normalizado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'fragment' normalizado como uma [string](language.types.string.md) se o componente 'fragment' existir, caso contrário é retornado **`null`**.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getFragment()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com#foo=bar");

echo $uri->getFragment();
?>
```

O exemplo acima produzirá:

```
foo=bar
```

### Veja também

- [Uri\Rfc3986\Uri::getRawFragment()](uri-rfc3986-uri.getrawfragment.md) - Obtém o componente fragment bruto
- [Uri\Rfc3986\Uri::withFragment()](uri-rfc3986-uri.withfragment.md) - Modifica o componente fragment
- [Uri\WhatWg\Url::getFragment()](uri-whatwg-url.getfragment.md) - Obtém o componente fragment

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
