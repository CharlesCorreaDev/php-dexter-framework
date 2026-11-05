# Desserializa o parâmetro 'data' em um objeto Uri

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-rfc3986-uri.unserialize.php

---

# Uri\Rfc3986\Uri::\_\_unserialize

(PHP 8 >= 8.5.0)

Uri\Rfc3986\Uri::\_\_unserialize — Desserializa o parâmetro 'data' em um objeto Uri

### Descrição

public function **Uri\Rfc3986\Uri::\_\_unserialize**([array](language.types.array.md) `$data`): [void](language.types.void.md)

Desserializa um parâmetro 'data' em um objeto [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md).

### Parâmetros

`data`
:   Os dados serializados como um [array](language.types.array.md).

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Se o método **\_\_unserialize()** for chamado em uma URI já existente, [Error](class.error.md)
é lançado.

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Veja também

- [Uri\Rfc3986\Uri::\_\_serialize()](uri-rfc3986-uri.serialize.md) - Serializa o objeto Uri
- [Uri\WhatWg\Url::\_\_unserialize()](uri-whatwg-url.unserialize.md) - Desserializa o parâmetro 'data' em um objeto Url

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
