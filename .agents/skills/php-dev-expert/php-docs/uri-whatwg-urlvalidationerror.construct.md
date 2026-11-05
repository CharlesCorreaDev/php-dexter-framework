# Constrói um objeto UrlValidationError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uri-whatwg-urlvalidationerror.construct.php

---

# Uri\WhatWg\UrlValidationError::\_\_construct

(PHP 8 >= 8.5.0)

Uri\WhatWg\UrlValidationError::\_\_construct — Constrói um objeto UrlValidationError

### Descrição

public function **Uri\WhatWg\UrlValidationError::\_\_construct**([string](language.types.string.md) `$context`, [Uri\WhatWg\UrlValidationErrorType](enum.uri-whatwg-urlvalidationerrortype.md) `$type`, [bool](language.types.boolean.md) `$failure`)

Constrói um objeto [Uri\WhatWg\UrlValidationError](class.uri-whatwg-urlvalidationerror.md).

### Parâmetros

`context`
:   A URL de entrada no ponto onde o erro foi detectado.

`type`
:   O tipo de erro.

`failure`
:   Se **`true`**, o erro fez com que a URL fosse rejeitada como inválida. Se **`false`**,
    o erro é um erro não fatal que foi corrigido automaticamente durante a análise.

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
