# Resolve uma URL com o objeto atual como URL base

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.resolve.php

---

# Uri\WhatWg\Url::resolve

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::resolve — Resolve uma URL com o objeto atual como URL base

### Descrição

public function **Uri\WhatWg\Url::resolve**([string](language.types.string.md) `$uri`, [array](language.types.array.md) `&$softErrors` = **`null`**): static

Resolve uma string de URL válida - que pode potencialmente ser uma string de URL relativa - com o objeto atual como URL base.

### Parâmetros

`uri`
:   Uma string de URL válida (por exemplo, `/foo` ou `https://example.com/foo`) para aplicar
    no objeto atual.

`softErrors`
:   Um [array](language.types.array.md) para passar uma lista de instâncias de [Uri\WhatWg\UrlValidationError](class.uri-whatwg-urlvalidationerror.md)
    por referência para fornecer informações estendidas sobre os erros não fatais disparados durante a resolução de referência.

### Valor Retornado

Uma nova instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md).

### Erros/Exceções

Se o URL resultante for inválido, é lançada uma [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::resolve()****

```
<?php
$url = new \Uri\WhatWg\Url("https://example.com");
$url = $url->resolve("/foo");

echo $url->toAsciiString();
?>
```

O exemplo acima produzirá:

```
https://example.com/foo
```

### Veja também

- [Uri\WhatWg\Url::\_\_construct()](uri-whatwg-url.construct.md) - Constrói o objeto Url
- [Uri\WhatWg\Url::parse()](uri-whatwg-url.parse.md) - Analisa uma URL
- [Uri\Rfc3986\Uri::resolve()](uri-rfc3986-uri.resolve.md) - Resolve uma URI com o objeto atual como URL base

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
