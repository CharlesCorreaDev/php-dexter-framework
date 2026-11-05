# Obtém o componente username

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.getusername.php

---

# Uri\WhatWg\Url::getUsername

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::getUsername — Obtém o componente username

### Descrição

public function **Uri\WhatWg\Url::getUsername**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'username'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'username' como uma [string](language.types.string.md) se o componente 'username' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::getUsername()****

```
<?php
$url = new \Uri\WhatWg\Url("https://username:password@example.com");

echo $url->getUsername();
?>
```

O exemplo acima produzirá:

```
username
```

### Veja também

- [Uri\WhatWg\Url::withUsername()](uri-whatwg-url.withusername.md) - Modifica o componente username
- [Uri\Rfc3986\Uri::getRawUsername()](uri-rfc3986-uri.getrawusername.md) - Obtém o username bruto
- [Uri\Rfc3986\Uri::getUsername()](uri-rfc3986-uri.getusername.md) - Obtém o username normalizado

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
