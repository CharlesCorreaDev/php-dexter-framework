# Modifica o componente query

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.withquery.php

---

# Uri\Rfc3986\Uri::withQuery

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::withQuery — Modifica o componente query

### Descrição

public function **Uri\Rfc3986\Uri::withQuery**([?](language.types.null.md)[string](language.types.string.md) `$query`): static

Cria uma nova URI e modifica seu componente 'query'.

### Parâmetros

`query`
:   Novo componente 'query'.

### Valor Retornado

A instância modificada de [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Erros/Exceções

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::withQuery()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com?foo=bar");
$uri = $uri->withQuery("foo=baz");

echo $uri->getQuery();
?>
```

O exemplo acima produzirá:

```
foo=baz
```

### Veja também

- [Uri\Rfc3986\Uri::getRawQuery()](uri-rfc3986-uri.getrawquery.md) - Obtém o componente query bruto
- [Uri\Rfc3986\Uri::getQuery()](uri-rfc3986-uri.getquery.md) - Obtém o componente query normalizado
- [Uri\WhatWg\Url::withQuery()](uri-whatwg-url.withquery.md) - Modifica o componente query

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
