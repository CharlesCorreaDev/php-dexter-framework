# Resolve uma URI com o objeto atual como URL base

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.resolve.php

---

# Uri\Rfc3986\Uri::resolve

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::resolve — Resolve uma URI com o objeto atual como URL base

### Descrição

public function **Uri\Rfc3986\Uri::resolve**([string](language.types.string.md) `$uri`): static

Resolve uma URI - que pode potencialmente ser uma referência relativa - com o objeto atual como URL base.

### Parâmetros

`uri`
:   Uma URI a ser aplicada sobre o objeto atual.

### Valor Retornado

Uma nova instância de [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Erros/Exceções

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::resolve()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com");
$uri = $uri->resolve("/foo");

echo $uri->toRawString();
?>
```

O exemplo acima produzirá:

```
https://example.com/foo
```

### Veja também

- [Uri\Rfc3986\Uri::\_\_construct()](uri-rfc3986-uri.construct.md) - Constrói o objeto Uri
- [Uri\Rfc3986\Uri::parse()](uri-rfc3986-uri.parse.md) - Analisa uma URI
- [Uri\WhatWg\Url::resolve()](uri-whatwg-url.resolve.md) - Resolve uma URL com o objeto atual como URL base

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
