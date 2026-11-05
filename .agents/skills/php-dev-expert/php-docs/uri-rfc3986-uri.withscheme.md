# Modifica o componente scheme

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.withscheme.php

---

# Uri\Rfc3986\Uri::withScheme

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::withScheme — Modifica o componente scheme

### Descrição

public function **Uri\Rfc3986\Uri::withScheme**([?](language.types.null.md)[string](language.types.string.md) `$scheme`): static

Cria uma nova URI e modifica seu componente 'scheme'.

### Parâmetros

`scheme`
:   Novo componente 'scheme'.

### Valor Retornado

A instância modificada de [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Erros/Exceções

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::withScheme()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com");
$uri = $uri->withScheme("http");

echo $uri->getScheme();
?>
```

O exemplo acima produzirá:

```
http
```

### Veja também

- [Uri\Rfc3986\Uri::getRawScheme()](uri-rfc3986-uri.getrawscheme.md) - Obtém o componente scheme bruto
- [Uri\Rfc3986\Uri::getScheme()](uri-rfc3986-uri.getscheme.md) - Obtém o componente scheme normalizado
- [Uri\WhatWg\Url::withScheme()](uri-whatwg-url.withscheme.md) - Modifica o componente scheme

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
