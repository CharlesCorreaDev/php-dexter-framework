# A classe Uri\WhatWg\UrlValidationError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.uri-whatwg-urlvalidationerror.php

---

# A classe Uri\WhatWg\UrlValidationError

(PHP 8 >= 8.5.0)

## Introdução

Fornece detalhes sobre erros que foram detectados ao analisar uma URL com
[Uri\WhatWg\Url](class.uri-whatwg-url.md).

## Resumo da classe

namespace **Uri\WhatWg**;

final
readonly
class ****UrlValidationError****
{

/\* Propriedades \*/

public
[string](language.types.string.md)
[$context](class.uri-whatwg-urlvalidationerror.md#uri-whatwg-urlvalidationerror.props.context);

public
[Uri\WhatWg\UrlValidationErrorType](enum.uri-whatwg-urlvalidationerrortype.md)
[$type](class.uri-whatwg-urlvalidationerror.md#uri-whatwg-urlvalidationerror.props.type);

public
[bool](language.types.boolean.md)
[$failure](class.uri-whatwg-urlvalidationerror.md#uri-whatwg-urlvalidationerror.props.failure);

/\* Métodos \*/

public function [\_\_construct](uri-whatwg-urlvalidationerror.construct.md)([string](language.types.string.md) `$context`, [Uri\WhatWg\UrlValidationErrorType](enum.uri-whatwg-urlvalidationerrortype.md) `$type`, [bool](language.types.boolean.md) `$failure`)

}

## Propriedades

context
:   A URL de entrada no ponto em que o erro foi detectado.

type
:   O tipo do erro.

failure
:   Se for igual a **`true`**, o erro fez com que a URL fosse rejeitada como inválida. Se for igual a **`false`**,
    o erro é um erro leve que foi automaticamente corrigido durante a análise.

## Índice

- [Uri\WhatWg\UrlValidationError::\_\_construct](uri-whatwg-urlvalidationerror.construct.md) — Constrói um objeto UrlValidationError

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
