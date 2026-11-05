# Modifica o componente fragment

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.withfragment.php

---

# Uri\WhatWg\Url::withFragment

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::withFragment — Modifica o componente fragment

### Descrição

public function **Uri\WhatWg\Url::withFragment**([?](language.types.null.md)[string](language.types.string.md) `$fragment`): static

Cria uma nova URL e modifica seu componente 'fragment'.

### Parâmetros

`fragment`
:   Novo componente 'fragment'.

### Valor Retornado

A instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md) modificada.

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::withFragment()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com/#foo");
$url = $url->withFragment("bar");

echo $url->getFragment();
?>
```

O exemplo acima produzirá:

```
bar
```

### Veja também

- [Uri\WhatWg\Url::getFragment()](uri-whatwg-url.getfragment.md) - Obtém o componente fragment
- [Uri\Rfc3986\Uri::withFragment()](uri-rfc3986-uri.withfragment.md) - Modifica o componente fragment

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
