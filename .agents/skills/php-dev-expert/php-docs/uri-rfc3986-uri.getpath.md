# Obtém o componente path normalizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getpath.php

---

# Uri\Rfc3986\Uri::getPath

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getPath — Obtém o componente path normalizado

### Descrição

public function **Uri\Rfc3986\Uri::getPath**(): [string](language.types.string.md)

Obtém o componente 'path' normalizado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'path' normalizado como uma [string](language.types.string.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getPath()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com/foo/bar");

echo $uri->getPath();
?>
```

O exemplo acima produzirá:

```
/foo/bar
```

### Veja também

- [Uri\Rfc3986\Uri::getRawPath()](uri-rfc3986-uri.getrawpath.md) - Obtém o componente path bruto
- [Uri\Rfc3986\Uri::withPath()](uri-rfc3986-uri.withpath.md) - Modifica o componente path
- [Uri\WhatWg\Url::getPath()](uri-whatwg-url.getpath.md) - Obtém o componente path

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
