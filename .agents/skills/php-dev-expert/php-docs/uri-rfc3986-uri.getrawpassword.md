# Obtém a senha bruta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getrawpassword.php

---

# Uri\Rfc3986\Uri::getRawPassword

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getRawPassword — Obtém a senha bruta

### Descrição

public function **Uri\Rfc3986\Uri::getRawPassword**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém a parte 'password' (senha) bruta (não normalizada) (o texto após o primeiro caractere `:`)
do componente 'userinfo'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a 'password' bruta (não normalizada) como uma [string](language.types.string.md) se o componente 'userinfo' contiver um caractere `:`.
Uma string vazia é retornada quando o componente 'userinfo' não contém um caractere `:`.
**`null`** é retornado quando o componente 'userinfo' não existe.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getRawPassword()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://user:password@example.com");

echo $uri->getRawPassword();
?>
```

O exemplo acima produzirá:

```
password
```

### Veja também

- [Uri\Rfc3986\Uri::getPassword()](uri-rfc3986-uri.getpassword.md) - Obtém a senha normalizada
- [Uri\Rfc3986\Uri::withUserInfo()](uri-rfc3986-uri.withuserinfo.md) - Modifica o componente userinfo
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
