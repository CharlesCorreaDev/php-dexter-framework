# Modifica o componente password

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.withpassword.php

---

# Uri\WhatWg\Url::withPassword

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::withPassword — Modifica o componente password

### Descrição

public function **Uri\WhatWg\Url::withPassword**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password`): static

Cria uma nova URL e modifica seu componente 'password'.

### Parâmetros

`password`
:   Novo componente 'password'.

### Valor Retornado

A instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md) modificada.

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::withPassword()****

```
<?php
$url = new \Uri\WhatWg\Url("https://user:password@example.com");
$url = $url->withPassword("pass");

echo $url->getPassword();
?>
```

O exemplo acima produzirá:

```
pass
```

### Veja também

- [Uri\WhatWg\Url::getPassword()](uri-whatwg-url.getpassword.md) - Obtém o componente password
- [Uri\WhatWg\Url::getUsername()](uri-whatwg-url.getusername.md) - Obtém o componente username
- [Uri\Rfc3986\Uri::withUserInfo()](uri-rfc3986-uri.withuserinfo.md) - Modifica o componente userinfo

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
