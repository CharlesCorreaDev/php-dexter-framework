# Obtém o componente query normalizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getquery.php

---

# Uri\Rfc3986\Uri::getQuery

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getQuery — Obtém o componente query normalizado

### Descrição

public function **Uri\Rfc3986\Uri::getQuery**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'query' normalizado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'query' normalizado como uma [string](language.types.string.md) se o componente 'query' existir, caso contrário é retornado **`null`**.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getQuery()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com?foo=bar");

echo $uri->getQuery();
?>
```

O exemplo acima produzirá:

```
foo=bar
```

### Veja também

- [Uri\Rfc3986\Uri::getRawQuery()](uri-rfc3986-uri.getrawquery.md) - Obtém o componente query bruto
- [Uri\Rfc3986\Uri::withQuery()](uri-rfc3986-uri.withquery.md) - Modifica o componente query
- [Uri\WhatWg\Url::getQuery()](uri-whatwg-url.getquery.md) - Obtém o componente de consulta

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
