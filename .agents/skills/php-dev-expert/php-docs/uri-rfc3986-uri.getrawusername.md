# Obtém o username bruto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.getrawusername.php

---

# Uri\Rfc3986\Uri::getRawUsername

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::getRawUsername — Obtém o username bruto

### Descrição

public function **Uri\Rfc3986\Uri::getRawUsername**(): [?](language.types.null.md)[string](language.types.string.md)

Obtém a parte 'username' bruta (não normalizada) (o texto antes do primeiro caractere `:`)
do componente 'userinfo'.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o 'username' bruto (não normalizado) como uma [string](language.types.string.md) se o componente 'userinfo' existir, caso contrário **`null`** é retornado.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::getRawUsername()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://user:password@example.com");

echo $uri->getRawUsername();
?>
```

O exemplo acima produzirá:

```
user
```

### Veja também

- [Uri\Rfc3986\Uri::getRawUserInfo()](uri-rfc3986-uri.getrawuserinfo.md) - Obtém o componente userinfo bruto
- [Uri\Rfc3986\Uri::getUserInfo()](uri-rfc3986-uri.getuserinfo.md) - Obtém o componente userinfo normalizado
- [Uri\Rfc3986\Uri::withUserInfo()](uri-rfc3986-uri.withuserinfo.md) - Modifica o componente userinfo
- [Uri\WhatWg\Url::getUsername()](uri-whatwg-url.getusername.md) - Obtém o componente username

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
