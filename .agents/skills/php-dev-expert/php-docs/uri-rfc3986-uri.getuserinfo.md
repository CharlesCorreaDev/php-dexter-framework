# Obtém o componente userinfo normalizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getuserinfo.php

---

# Uri\Rfc3986\Uri::getUserInfo

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getUserInfo — Obtém o componente userinfo normalizado

### Descrição

public function **Uri\Rfc3986\Uri::getUserInfo**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém o componente 'userinfo' normalizado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o componente 'userinfo' normalizado como uma [string](language.types.string.md) se o componente 'userinfo' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getUserInfo()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://user:password@example.com");

echo $uri->getUserInfo();
?>
```

O exemplo acima produzirá:

```
user:password
```

### Veja também

- [Uri\Rfc3986\Uri::getRawUserInfo()](uri-rfc3986-uri.getrawuserinfo.md) - Obtém o componente userinfo bruto
- [Uri\Rfc3986\Uri::getRawUsername()](uri-rfc3986-uri.getrawusername.md) - Obtém o username bruto
- [Uri\Rfc3986\Uri::getUsername()](uri-rfc3986-uri.getusername.md) - Obtém o username normalizado
- [Uri\Rfc3986\Uri::getRawPassword()](uri-rfc3986-uri.getrawpassword.md) - Obtém a senha bruta
- [Uri\Rfc3986\Uri::getPassword()](uri-rfc3986-uri.getpassword.md) - Obtém a senha normalizada
- [Uri\Rfc3986\Uri::withUserInfo()](uri-rfc3986-uri.withuserinfo.md) - Modifica o componente userinfo
- [Uri\WhatWg\Url::getUsername()](uri-whatwg-url.getusername.md) - Obtém o componente username
- [Uri\WhatWg\Url::getPassword()](uri-whatwg-url.getpassword.md) - Obtém o componente password

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
