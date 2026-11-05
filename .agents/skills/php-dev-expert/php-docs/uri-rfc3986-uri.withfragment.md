# Modifica o componente fragment

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.withfragment.php

---

# Uri\Rfc3986\Uri::withFragment

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::withFragment — Modifica o componente fragment

### Descrição

public function **Uri\Rfc3986\Uri::withFragment**([?](language.types.null.md)[string](language.types.string.md) `$fragment`): static

Cria uma nova URI e modifica seu componente 'fragment'.

### Parâmetros

`fragment`
:   Novo componente 'fragment'.

### Valor Retornado

A instância modificada de [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Erros/Exceções

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::withFragment()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com/#foo");
$uri = $uri->withFragment("bar");

echo $uri->getFragment();
?>
```

O exemplo acima produzirá:

```
bar
```

### Veja também

- [Uri\Rfc3986\Uri::getFragment()](uri-rfc3986-uri.getfragment.md) - Obtém o componente fragment normalizado
- [Uri\Rfc3986\Uri::getRawFragment()](uri-rfc3986-uri.getrawfragment.md) - Obtém o componente fragment bruto
- [Uri\WhatWg\Url::withFragment()](uri-whatwg-url.withfragment.md) - Modifica o componente fragment

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
