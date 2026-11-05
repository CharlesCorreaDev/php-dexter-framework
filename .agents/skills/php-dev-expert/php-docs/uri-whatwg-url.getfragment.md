# Obtém o componente fragment

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.getfragment.php

---

# Uri\WhatWg\Url::getFragment

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::getFragment — Obtém o componente fragment

### Descrição

public function **Uri\WhatWg\Url::getFragment**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'fragment'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'fragment' como uma [string](language.types.string.md) se o componente 'fragment' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::getFragment()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com#foo");

echo $url->getFragment();
?>
```

O exemplo acima produzirá:

```
foo
```

### Veja também

- [Uri\WhatWg\Url::withFragment()](uri-whatwg-url.withfragment.md) - Modifica o componente fragment
- [Uri\Rfc3986\Uri::getRawFragment()](uri-rfc3986-uri.getrawfragment.md) - Obtém o componente fragment bruto
- [Uri\Rfc3986\Uri::getFragment()](uri-rfc3986-uri.getfragment.md) - Obtém o componente fragment normalizado

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
