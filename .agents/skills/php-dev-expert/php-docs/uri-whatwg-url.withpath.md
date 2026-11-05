# Modifica o componente path

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.withpath.php

---

# Uri\WhatWg\Url::withPath

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::withPath — Modifica o componente path

### Descrição

public function **Uri\WhatWg\Url::withPath**([string](language.types.string.md) `$path`): static

Cria uma nova URL e modifica seu componente 'path'.

### Parâmetros

`path`
:   Novo componente 'path'.

### Valor Retornado

A instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md) modificada.

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::withPath()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com/foo/bar");
$url = $url->withPath("/baz");

echo $url->getPath();
?>
```

O exemplo acima produzirá:

```
/baz
```

### Veja também

- [Uri\WhatWg\Url::getPath()](uri-whatwg-url.getpath.md) - Obtém o componente path
- [Uri\Rfc3986\Uri::withPath()](uri-rfc3986-uri.withpath.md) - Modifica o componente path

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
