# Modifica o componente port

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.withport.php

---

# Uri\Rfc3986\Uri::withPort

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::withPort — Modifica o componente port

### Descrição

public function **Uri\Rfc3986\Uri::withPort**([?](language.types.null.md)[int](language.types.integer.md) `$port`): static

Cria uma nova URI e modifica seu componente 'port'.

### Parâmetros

`port`
:   Novo componente 'port'.

### Valor Retornado

A instância modificada de [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Erros/Exceções

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::withPort()****

```
<?php
$uri = new \Uri\Rfc3986\Uri("https://example.com:8080");
$uri = $uri->withPort(443);

echo $uri->getPort();
?>
```

O exemplo acima produzirá:

```
443
```

### Veja também

- [Uri\Rfc3986\Uri::getPort()](uri-rfc3986-uri.getport.md) - Obtém o componente port normalizado
- [Uri\WhatWg\Url::withPort()](uri-whatwg-url.withport.md) - Modifica o componente port

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
