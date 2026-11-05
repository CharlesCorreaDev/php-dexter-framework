# Obtém o componente path

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.getpath.php

---

# Uri\WhatWg\Url::getPath

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::getPath — Obtém o componente path

### Descrição

public function **Uri\WhatWg\Url::getPath**(): [string](language.types.string.md)

Obtém o componente 'path'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'path' como uma [string](language.types.string.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::getPath()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com/foo/bar");

echo $url->getPath();
?>
```

O exemplo acima produzirá:

```
/foo/bar
```

### Veja também

- [Uri\WhatWg\Url::withPath()](uri-whatwg-url.withpath.md) - Modifica o componente path
- [Uri\Rfc3986\Uri::getRawPath()](uri-rfc3986-uri.getrawpath.md) - Obtém o componente path bruto
- [Uri\Rfc3986\Uri::getPath()](uri-rfc3986-uri.getpath.md) - Obtém o componente path normalizado

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
