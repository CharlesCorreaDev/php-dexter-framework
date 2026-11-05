# Obtém o componente port normalizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getport.php

---

# Uri\Rfc3986\Uri::getPort

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getPort — Obtém o componente port normalizado

### Descrição

public function **Uri\Rfc3986\Uri::getPort**(): [?](language.types.null.md)[int](language.types.integer.md)

Obtém o componente 'port' normalizado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'port' normalizado como um [int](language.types.integer.md) se o componente 'port' existir, caso contrário é retornado **`null`**.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getPort()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com:443");

echo $uri->getPort();
?>
```

O exemplo acima produzirá:

```
443
```

### Veja também

- [Uri\Rfc3986\Uri::withPort()](uri-rfc3986-uri.withport.md) - Modifica o componente port
- [Uri\WhatWg\Url::getPort()](uri-whatwg-url.getport.md) - Obtém o componente port

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
