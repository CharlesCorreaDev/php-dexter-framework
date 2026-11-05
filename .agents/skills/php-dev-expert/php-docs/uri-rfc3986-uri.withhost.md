# Modifica o componente host

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.withhost.php

---

# Uri\Rfc3986\Uri::withHost

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::withHost — Modifica o componente host

### Descrição

public function **Uri\Rfc3986\Uri::withHost**([?](language.types.null.md)[string](language.types.string.md) `$host`): static

Cria uma nova URI e modifica seu componente 'host'.

### Parâmetros

`host`
:   Novo componente 'host'.

### Valor Retornado

A instância modificada de [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Erros/Exceções

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::withHost()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com");
$uri = $uri->withHost("example.net");

echo $uri->getHost();
?>
```

O exemplo acima produzirá:

```
example.net
```

### Veja também

- [Uri\Rfc3986\Uri::getHost()](uri-rfc3986-uri.gethost.md) - Obtém o componente host normalizado
- [Uri\Rfc3986\Uri::getRawHost()](uri-rfc3986-uri.getrawhost.md) - Obtém o componente host bruto
- [Uri\WhatWg\Url::withHost()](uri-whatwg-url.withhost.md) - Modifica o componente host

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
