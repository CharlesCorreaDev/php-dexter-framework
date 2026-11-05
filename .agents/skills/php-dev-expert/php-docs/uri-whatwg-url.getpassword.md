# Obtém o componente password

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.getpassword.php

---

# Uri\WhatWg\Url::getPassword

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::getPassword — Obtém o componente password

### Descrição

public function **Uri\WhatWg\Url::getPassword**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'password'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'password' como uma [string](language.types.string.md) se o componente 'password' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::getPassword()****

```
<?php
$url = new \Uri\WhatWg\Url("https://user:password@example.com");

echo $url->getPassword();
?>
```

O exemplo acima produzirá:

```
password
```

### Veja também

- [Uri\WhatWg\Url::withPassword()](uri-whatwg-url.withpassword.md) - Modifica o componente password
- [Uri\Rfc3986\Uri::getRawPassword()](uri-rfc3986-uri.getrawpassword.md) - Obtém a senha bruta
- [Uri\Rfc3986\Uri::getPassword()](uri-rfc3986-uri.getpassword.md) - Obtém a senha normalizada

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
