# Desserializa o parâmetro 'data' em um objeto Url

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-url.unserialize.php

---

# Uri\WhatWg\Url::\_\_unserialize

(PHP 8 >= 8.5.0)

Uri\WhatWg\Url::\_\_unserialize — Desserializa o parâmetro 'data' em um objeto Url

### Descrição

public function **Uri\WhatWg\Url::\_\_unserialize**([array](language.types.array.md) `$data`): [void](language.types.void.md)

Desserializa um parâmetro 'data' em um objeto [Uri\WhatWg\Url](class.uri-whatwg-url.md).

### Parâmetros

`data`
:   Os dados serializados como um [array](language.types.array.md).

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Se o método **\_\_unserialize()** for chamado em uma URL já existente, um [Error](class.error.md)
é lançado.

Se o URI resultante for inválido, é lançada uma [Uri\InvalidUriException](class.uri-invaliduriexception.md).

### Veja também

- [Uri\WhatWg\Url::\_\_serialize()](uri-whatwg-url.serialize.md) - Serializa o objeto Url
- [Uri\Rfc3986\Uri::\_\_unserialize()](uri-rfc3986-uri.unserialize.md) - Desserializa o parâmetro 'data' em um objeto Uri

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
