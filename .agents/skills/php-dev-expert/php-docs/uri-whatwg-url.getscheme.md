# Obtém o componente scheme

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.getscheme.php

---

# Uri\WhatWg\Url::getScheme

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::getScheme — Obtém o componente scheme

### Descrição

public function **Uri\WhatWg\Url::getScheme**(): [string](language.types.string.md)

Obtém o componente 'scheme'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'scheme' como uma [string](language.types.string.md) se o componente 'scheme' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::getScheme()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com");

echo $url->getScheme();
?>
```

O exemplo acima produzirá:

```
https
```

### Veja também

- [Uri\WhatWg\Url::withScheme()](uri-whatwg-url.withscheme.md) - Modifica o componente scheme
- [Uri\Rfc3986\Uri::getRawScheme()](uri-rfc3986-uri.getrawscheme.md) - Obtém o componente scheme bruto
- [Uri\Rfc3986\Uri::getScheme()](uri-rfc3986-uri.getscheme.md) - Obtém o componente scheme normalizado

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
