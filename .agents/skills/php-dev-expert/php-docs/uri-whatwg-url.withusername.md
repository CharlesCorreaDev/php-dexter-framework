# Modifica o componente username

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.withusername.php

---

# Uri\WhatWg\Url::withUsername

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::withUsername — Modifica o componente username

### Descrição

public function **Uri\WhatWg\Url::withUsername**([?](language.types.null.md)[string](language.types.string.md) `$username`): static

Cria uma nova URL e modifica seu componente 'username'.

### Parâmetros

`username`
:   Novo componente 'username'.

### Valor Retornado

A instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md) modificada.

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::withUsername()****

```
<?php
$url = new \Uri\WhatWg\Url("https://user:password@example.com");
$url = $url->withUsername("usr");

echo $url->getUsername();
?>
```

O exemplo acima produzirá:

```
usr
```

### Veja também

- [Uri\WhatWg\Url::getUsername()](uri-whatwg-url.getusername.md) - Obtém o componente username
- [Uri\WhatWg\Url::getPassword()](uri-whatwg-url.getpassword.md) - Obtém o componente password
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
