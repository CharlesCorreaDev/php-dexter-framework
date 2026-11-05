# Verifica se duas URIs são equivalentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.equals.php

---

# Uri\Rfc3986\Uri::equals

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::equals — Verifica se duas URIs são equivalentes

### Descrição

public function **Uri\Rfc3986\Uri::equals**([Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) `$uri`, [Uri\UriComparisonMode](enum.uri-uricomparisonmode.md) `$comparisonMode` = **`Uri\UriComparisonMode::ExcludeFragment`**): [bool](language.types.boolean.md)

Verifica se duas URIs são equivalentes.

### Parâmetros

`uri`
:   URI para comparar com a URI atual.

`comparisonMode`
:   Define se o componente 'fragment' é levado em consideração na comparação
    (`Uri\UriComparisonMode::IncludeFragment`) ou não
    (`Uri\UriComparisonMode::ExcludeFragment`). Por padrão, o 'fragment' é excluído.

### Valor Retornado

Retorna **`true`** se as duas URIs forem equivalentes, ou **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::equals()****

```
<?php
$uri1 = new \Uri\Rfc3986\Uri("https://example.com");
$uri2 = new \Uri\Rfc3986\Uri("HTTPS://example.com");

var_dump($uri1->equals($uri2));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [Uri\WhatWg\Url::equals()](uri-whatwg-url.equals.md) - Verifica se duas URLs são equivalentes

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
