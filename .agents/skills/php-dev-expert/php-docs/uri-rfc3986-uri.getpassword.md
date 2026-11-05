# Obtém a senha normalizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getpassword.php

---

# Uri\Rfc3986\Uri::getPassword

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getPassword — Obtém a senha normalizada

### Descrição

public function **Uri\Rfc3986\Uri::getPassword**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém a parte 'password' (senha) normalizada (o texto após o primeiro caractere `:`)
do componente 'userinfo'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a senha normalizada como uma [string](language.types.string.md) se o componente 'userinfo' contiver um caractere `:`.
Uma string vazia é retornada quando o componente 'userinfo' não contém um caractere `:`.
**`null`** é retornado quando o componente 'userinfo' não existe.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getPassword()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://user:password@example.com");

echo $uri->getPassword();
?>
```

O exemplo acima produzirá:

```
password
```

### Veja também

- [Uri\Rfc3986\Uri::getRawPassword()](uri-rfc3986-uri.getrawpassword.md) - Obtém a senha bruta
- [Uri\Rfc3986\Uri::getRawUserInfo()](uri-rfc3986-uri.getrawuserinfo.md) - Obtém o componente userinfo bruto
- [Uri\Rfc3986\Uri::getUserInfo()](uri-rfc3986-uri.getuserinfo.md) - Obtém o componente userinfo normalizado
- **Uri\Rfc3986\Uri::withPassword()**
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
