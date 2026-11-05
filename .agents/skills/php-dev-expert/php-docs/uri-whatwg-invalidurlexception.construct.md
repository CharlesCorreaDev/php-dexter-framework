# Constrói um objeto InvalidUrlException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-invalidurlexception.construct.php

---

# Uri\WhatWg\InvalidUrlException::\_\_construct

(PHP 8 >= 8.5.0)

Uri\WhatWg\InvalidUrlException::\_\_construct — Constrói um objeto InvalidUrlException

### Descrição

public function **Uri\WhatWg\InvalidUrlException::\_\_construct**(  
    [string](language.types.string.md) `$message` = "",  
    [array](language.types.array.md) `$errors` = [],  
    [int](language.types.integer.md) `$code` = 0,  
    [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**  
)

Constrói um objeto [Uri\WhatWg\InvalidUrlException](class.uri-whatwg-invalidurlexception.md).

### Parâmetros

`message`
:   Mensagem da exceção.

`errors`
:   Um [array](language.types.array.md) de objetos [Uri\WhatWg\UrlValidationError](class.uri-whatwg-urlvalidationerror.md).

`code`
:   Código da exceção.

`previous`
:   A exceção anterior usada para encadeamento de exceções.

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
