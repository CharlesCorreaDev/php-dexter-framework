# Modifica o componente query

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.withquery.php

---

# Uri\WhatWg\Url::withQuery

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::withQuery — Modifica o componente query

### Descrição

public function **Uri\WhatWg\Url::withQuery**([?](language.types.null.md)[string](language.types.string.md) `$query`): static

Cria uma nova URL e modifica seu componente 'query'.

### Parâmetros

`query`
:   Novo componente 'query'.

### Valor Retornado

A instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md) modificada.

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::withQuery()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com?foo=bar");
$url = $url->withQuery("foo=baz");

echo $url->getQuery();
?>
```

O exemplo acima produzirá:

```
foo=baz
```

### Veja também

- [Uri\WhatWg\Url::getQuery()](uri-whatwg-url.getquery.md) - Obtém o componente de consulta
- [Uri\Rfc3986\Uri::withQuery()](uri-rfc3986-uri.withquery.md) - Modifica o componente query

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
