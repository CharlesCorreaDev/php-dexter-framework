# Analisa uma URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.parse.php

---

# Uri\WhatWg\Url::parse

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::parse — Analisa uma URL

### Descrição

public static function **Uri\WhatWg\Url::parse**([string](language.types.string.md) `$uri`, [?](language.types.null.md)[Uri\WhatWg\Url](class.uri-whatwg-url.md) `$baseUrl` = **`null`**, [array](language.types.array.md) `&$errors` = **`null`**): [?](language.types.null.md)static

Analisa uma URL.

### Parâmetros

`uri`
:   Uma string de URL válida para análise (por exemplo, `/foo` ou `https://example.com/foo`).

`baseUrl`
:   Quando uma [string](language.types.string.md) é passada, `uri` é aplicado sobre
    `baseUrl`, se `uri` for uma string de URL relativa.
    Se **`null`** for passado, ou `uri` não for uma string de URL relativa,
    `baseUrl` não terá nenhum efeito.

`errors`
:   Um [array](language.types.array.md) para passar uma lista de instâncias de [Uri\WhatWg\UrlValidationError](class.uri-whatwg-urlvalidationerror.md)
    por referência para fornecer informações estendidas sobre os erros disparados durante a análise.

### Valor Retornado

Retorna uma instância de [Uri\WhatWg\Url](class.uri-whatwg-url.md) em caso de sucesso, ou **`null`** em caso de falha.

### Examples

**Exemplo #1 Exemplo básico de **Uri\WhatWg\Url::parse()****

```
<?php
$url = \Uri\WhatWg\Url::parse("https://example.com");

if ($url !== null) {
    echo "URL válida: " . $url->toAsciiString();
} else {
    echo "URL inválida";
}
?>
```

O exemplo acima produzirá:

```
URL válida: https://example.com/
```

### Veja também

- [Uri\WhatWg\Url::\_\_construct()](uri-whatwg-url.construct.md) - Constrói o objeto Url
- [Uri\WhatWg\Url::resolve()](uri-whatwg-url.resolve.md) - Resolve uma URL com o objeto atual como URL base
- [Uri\Rfc3986\Uri::parse()](uri-rfc3986-uri.parse.md) - Analisa uma URI

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
