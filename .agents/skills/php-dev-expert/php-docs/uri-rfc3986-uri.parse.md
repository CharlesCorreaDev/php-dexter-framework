# Analisa uma URI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.parse.php

---

# Uri\Rfc3986\Uri::parse

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::parse — Analisa uma URI

### Descrição

public static function **Uri\Rfc3986\Uri::parse**([string](language.types.string.md) `$uri`, [?](language.types.null.md)[Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) `$baseUrl` = **`null`**): [?](language.types.null.md)static

Analisa uma URI.

### Parâmetros

`uri`
:   URI a ser analisada.

`baseUrl`
:   Quando uma [string](language.types.string.md) é passada, `uri` é aplicado sobre
    `baseUrl`, se `uri` for uma referência relativa.
    Se **`null`** for passado, ou se `uri` não for uma referência relativa,
    `baseUrl` não terá nenhum efeito.

### Valor Retornado

Retorna uma instância de [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) em caso de sucesso, ou **`null`** em caso de falha.

### Examples

**Exemplo #1 Exemplo básico de **Uri\Rfc3986\Uri::parse()****

```
<?php
$uri = \Uri\Rfc3986\Uri::parse("https://example.com");

if ($uri !== null) {
    echo "URI válido: " . $uri->toString();
} else {
    echo "URI inválido";
}
?>
```

O exemplo acima produzirá:

```
URI válido: https://example.com
```

### Veja também

- [Uri\Rfc3986\Uri::\_\_construct()](uri-rfc3986-uri.construct.md) - Constrói o objeto Uri
- [Uri\Rfc3986\Uri::resolve()](uri-rfc3986-uri.resolve.md) - Resolve uma URI com o objeto atual como URL base
- [Uri\WhatWg\Url::parse()](uri-whatwg-url.parse.md) - Analisa uma URL

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
