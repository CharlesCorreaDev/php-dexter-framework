# Constrói o objeto Url

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.construct.php

---

# Uri\WhatWg\Url::\_\_construct

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::\_\_construct — Constrói o objeto Url

### Descrição

public function **Uri\WhatWg\Url::\_\_construct**([string](language.types.string.md) `$uri`, [?](language.types.null.md)[Uri\WhatWg\Url](class.uri-whatwg-url.md) `$baseUrl` = **`null`**, [array](language.types.array.md) `&$softErrors` = **`null`**)

Constrói o objeto [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Parâmetros

`uri`
:   Uma string de URL válida para análise (por exemplo, `/foo` ou `https://example.com/foo`).

`baseUrl`
:   Quando uma [string](language.types.string.md) é passada, `uri` é aplicado sobre
    `baseUrl`, se `uri` for uma string de URL relativa.
    Se **`null`** for passado, ou `uri` não for uma string de URL relativa,
    `baseUrl` não terá nenhum efeito.

`softErrors`
:   Um [array](language.types.array.md) para passar uma lista de instâncias de [Uri\WhatWg\UrlValidationError](class.uri-whatwg-urlvalidationerror.md)
    por referência para fornecer informações estendidas sobre os erros disparados durante a análise.

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Veja também

- [Uri\WhatWg\Url::parse()](uri-whatwg-url.parse.md) - Analisa uma URL
- [Uri\WhatWg\Url::resolve()](uri-whatwg-url.resolve.md) - Resolve uma URL com o objeto atual como URL base
- [Uri\Rfc3986\Uri::\_\_construct()](uri-rfc3986-uri.construct.md) - Constrói o objeto Uri

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
