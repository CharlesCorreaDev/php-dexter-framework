# Modifica o componente path

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.withpath.php

---

# Uri\Rfc3986\Uri::withPath

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::withPath — Modifica o componente path

### Descrição

public function **Uri\Rfc3986\Uri::withPath**([string](language.types.string.md) `$path`): static

Cria uma nova URI e modifica seu componente 'path'.

### Parâmetros

`path`
:   Novo componente 'path'.

### Valor Retornado

A instância modificada de [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Erros/Exceções

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::withPath()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com/foo/bar");
$uri = $uri->withPath("/baz");

echo $uri->getPath();
?>
```

O exemplo acima produzirá:

```
/baz
```

### Veja também

- [Uri\Rfc3986\Uri::getPath()](uri-rfc3986-uri.getpath.md) - Obtém o componente path normalizado
- [Uri\Rfc3986\Uri::getRawPath()](uri-rfc3986-uri.getrawpath.md) - Obtém o componente path bruto
- [Uri\WhatWg\Url::withPath()](uri-whatwg-url.withpath.md) - Modifica o componente path

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
