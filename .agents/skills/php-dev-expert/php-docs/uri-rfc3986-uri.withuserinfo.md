# Modifica o componente userinfo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.withuserinfo.php

---

# Uri\Rfc3986\Uri::withUserInfo

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::withUserInfo — Modifica o componente userinfo

### Descrição

public function **Uri\Rfc3986\Uri::withUserInfo**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$userinfo`): static

Cria uma nova URI e modifica seu componente 'userinfo'.

### Parâmetros

`userinfo`
:   Novo componente 'userinfo'.

### Valor Retornado

A instância modificada de [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Erros/Exceções

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::withUserInfo()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://user:password@example.com");
$uri = $uri->withUserInfo("userinfo");

echo $uri->getUserInfo();
?>
```

O exemplo acima produzirá:

```
userinfo
```

### Veja também

- [Uri\Rfc3986\Uri::getRawUserInfo()](uri-rfc3986-uri.getrawuserinfo.md) - Obtém o componente userinfo bruto
- [Uri\Rfc3986\Uri::getUserInfo()](uri-rfc3986-uri.getuserinfo.md) - Obtém o componente userinfo normalizado
- [Uri\Rfc3986\Uri::getRawUsername()](uri-rfc3986-uri.getrawusername.md) - Obtém o username bruto
- [Uri\Rfc3986\Uri::getUsername()](uri-rfc3986-uri.getusername.md) - Obtém o username normalizado
- [Uri\Rfc3986\Uri::getRawPassword()](uri-rfc3986-uri.getrawpassword.md) - Obtém a senha bruta
- [Uri\Rfc3986\Uri::getPassword()](uri-rfc3986-uri.getpassword.md) - Obtém a senha normalizada
- [Uri\WhatWg\Url::withUsername()](uri-whatwg-url.withusername.md) - Modifica o componente username
- [Uri\WhatWg\Url::withPassword()](uri-whatwg-url.withpassword.md) - Modifica o componente password

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
