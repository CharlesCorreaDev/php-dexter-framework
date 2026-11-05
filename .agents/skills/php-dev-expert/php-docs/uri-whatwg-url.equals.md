# Verifica se duas URLs são equivalentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.equals.php

---

# Uri\WhatWg\Url::equals

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::equals — Verifica se duas URLs são equivalentes

### Descrição

public function **Uri\WhatWg\Url::equals**([Uri\WhatWg\Url](class.uri-whatwg-url.md) `$url`, [Uri\UriComparisonMode](enum.uri-uricomparisonmode.md) `$comparisonMode` = **`Uri\UriComparisonMode::ExcludeFragment`**): [bool](language.types.boolean.md)

Verifica se duas URLs são equivalentes.

### Parâmetros

`url`
:   URL para comparar com a URL atual.

`comparisonMode`
:   Se o componente 'fragment' é levado em conta na comparação
    (`Uri\UriComparisonMode::IncludeFragment`) ou não
    (`Uri\UriComparisonMode::ExcludeFragment`). Por padrão, o 'fragment' é excluído.

### Valor Retornado

Retorna **`true`** se as duas URLs são equivalentes, ou **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::equals()****

```
<?php
$url1 = new \Uri\WhatWg\Url("https://example.com");
$url2 = new \Uri\WhatWg\Url("HTTPS://example.com");

var_dump($url1->equals($url2));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [Uri\Rfc3986\Uri::equals()](uri-rfc3986-uri.equals.md) - Verifica se duas URIs são equivalentes

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
