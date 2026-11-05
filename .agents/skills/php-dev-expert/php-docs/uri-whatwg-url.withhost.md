# Modifica o componente host

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.withhost.php

---

# Uri\WhatWg\Url::withHost

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::withHost — Modifica o componente host

### Descrição

public function **Uri\WhatWg\Url::withHost**([?](language.types.null.md)[string](language.types.string.md) `$host`): static

Cria uma nova URL e modifica seu componente 'host'.

### Parâmetros

`host`
:   Novo componente 'host'.

### Valor Retornado

A instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md) modificada.

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::withHost()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com");
$url = $url->withHost("example.net");

echo $url->getAsciiHost();
?>
```

O exemplo acima produzirá:

```
example.net
```

### Veja também

- [Uri\WhatWg\Url::getAsciiHost()](uri-whatwg-url.getasciihost.md) - Obtém o componente host como uma string ASCII
- [Uri\WhatWg\Url::getUnicodeHost()](uri-whatwg-url.getunicodehost.md) - Obtém o componente host como uma string Unicode
- [Uri\Rfc3986\Uri::withHost()](uri-rfc3986-uri.withhost.md) - Modifica o componente host

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
