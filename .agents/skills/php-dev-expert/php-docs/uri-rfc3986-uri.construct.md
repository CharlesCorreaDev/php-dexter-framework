# Constrói o objeto Uri

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.construct.php

---

# Uri\Rfc3986\Uri::\_\_construct

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::\_\_construct — Constrói o objeto Uri

### Descrição

public function **Uri\Rfc3986\Uri::\_\_construct**([string](language.types.string.md) `$uri`, [?](language.types.null.md)[Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) `$baseUrl` = **`null`**)

Constrói o objeto [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Parâmetros

`uri`
:   URI a ser analisado.

`baseUrl`
:   Quando uma [string](language.types.string.md) é passada, `uri` é aplicado sobre
    `baseUrl`, se `uri` for uma referência relativa.
    Se **`null`** for passado, ou se `uri` não for uma referência relativa,
    `baseUrl` não terá nenhum efeito.

### Erros/Exceções

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Veja também

- [Uri\Rfc3986\Uri::parse()](uri-rfc3986-uri.parse.md) - Analisa uma URI
- [Uri\Rfc3986\Uri::resolve()](uri-rfc3986-uri.resolve.md) - Resolve uma URI com o objeto atual como URL base
- [Uri\WhatWg\Url::\_\_construct()](uri-whatwg-url.construct.md) - Constrói o objeto Url

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
