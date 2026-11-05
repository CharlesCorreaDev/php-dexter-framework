# Obtém o componente port

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.getport.php

---

# Uri\WhatWg\Url::getPort

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::getPort — Obtém o componente port

### Descrição

public function **Uri\WhatWg\Url::getPort**(): [?](language.types.null.md)[int](language.types.integer.md)

Obtém o componente 'port'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'port' como um [int](language.types.integer.md) se o componente 'port' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::getPort()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com:8080");
var_dump($url->getPort());

// 443 é a porta padrão para https, por isso não é armazenada.
$url = new \Uri\WhatWg\Url("https://example.com:443");
var_dump($url->getPort());
?>
```

O exemplo acima produzirá:

```
int(8080)
NULL
```

### Veja também

- [Uri\WhatWg\Url::withPort()](uri-whatwg-url.withport.md) - Modifica o componente port
- [Uri\Rfc3986\Uri::getPort()](uri-rfc3986-uri.getport.md) - Obtém o componente port normalizado

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
