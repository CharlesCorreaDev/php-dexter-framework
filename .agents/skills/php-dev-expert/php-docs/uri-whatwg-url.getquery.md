# Obtém o componente de consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.getquery.php

---

# Uri\WhatWg\Url::getQuery

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::getQuery — Obtém o componente de consulta

### Descrição

public function **Uri\WhatWg\Url::getQuery**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'query'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'query' como uma [string](language.types.string.md) se o componente 'query' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::getQuery()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com?foo/bar");

echo $url->getQuery();
?>
```

O exemplo acima produzirá:

```
foo/bar
```

### Veja também

- [Uri\WhatWg\Url::withQuery()](uri-whatwg-url.withquery.md) - Modifica o componente query
- [Uri\Rfc3986\Uri::getRawQuery()](uri-rfc3986-uri.getrawquery.md) - Obtém o componente query bruto
- [Uri\Rfc3986\Uri::getQuery()](uri-rfc3986-uri.getquery.md) - Obtém o componente query normalizado

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
