# Modifica o componente scheme

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.withscheme.php

---

# Uri\WhatWg\Url::withScheme

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::withScheme — Modifica o componente scheme

### Descrição

public function **Uri\WhatWg\Url::withScheme**([string](language.types.string.md) `$scheme`): static

Cria uma nova URL e modifica seu componente 'scheme'.

### Parâmetros

`scheme`
:   Novo componente 'scheme'.

### Valor Retornado

A instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md) modificada.

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::withScheme()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com");
$url = $url->withScheme("http");

echo $url->getScheme();
?>
```

O exemplo acima produzirá:

```
http
```

### Veja também

- [Uri\WhatWg\Url::getScheme()](uri-whatwg-url.getscheme.md) - Obtém o componente scheme
- [Uri\Rfc3986\Uri::withScheme()](uri-rfc3986-uri.withscheme.md) - Modifica o componente scheme

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
