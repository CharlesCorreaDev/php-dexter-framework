# Modifica o componente port

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.withport.php

---

# Uri\WhatWg\Url::withPort

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::withPort — Modifica o componente port

### Descrição

public function **Uri\WhatWg\Url::withPort**([?](language.types.null.md)[int](language.types.integer.md) `$port`): static

Cria uma nova URL e modifica seu componente 'port'.

### Parâmetros

`port`
:   Novo componente 'port'.

### Valor Retornado

A instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md) modificada.

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::withPort()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com:8080");

// 443 é a porta padrão para https, por isso não é armazenada.
$url = $url->withPort(443);
var_dump($url->getPort());

$url = $url->withPort(8443);
var_dump($url->getPort());
?>
```

O exemplo acima produzirá:

```
NULL
int(8443)
```

### Veja também

- [Uri\WhatWg\Url::getPort()](uri-whatwg-url.getport.md) - Obtém o componente port
- [Uri\Rfc3986\Uri::withPort()](uri-rfc3986-uri.withport.md) - Modifica o componente port

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
