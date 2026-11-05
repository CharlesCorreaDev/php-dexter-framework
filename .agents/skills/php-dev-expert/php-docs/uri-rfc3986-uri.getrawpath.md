# Obtém o componente path bruto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getrawpath.php

---

# Uri\Rfc3986\Uri::getRawPath

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getRawPath — Obtém o componente path bruto

### Descrição

public function **Uri\Rfc3986\Uri::getRawPath**(): [string](language.types.string.md)

Obtém o componente 'path' bruto (não normalizado).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'path' bruto como uma [string](language.types.string.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getRawPath()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com/foo/bar");

echo $uri->getRawPath();
?>
```

O exemplo acima produzirá:

```
/foo/bar
```

### Veja também

- [Uri\Rfc3986\Uri::getPath()](uri-rfc3986-uri.getpath.md) - Obtém o componente path normalizado
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
