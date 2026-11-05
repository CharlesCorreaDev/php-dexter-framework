# A classe Uri\WhatWg\InvalidUrlException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.uri-whatwg-invalidurlexception.php

---

# A classe Uri\WhatWg\InvalidUrlException

(PHP 8 >= 8.5.0)

## Introdução

Indica que uma URL fornecida é inválida ou que uma operação pode resultar
em uma URL inválida de acordo com o Padrão
[» WHATWG URL](https://url.spec.whatwg.org/).

## Resumo da classe

namespace **Uri\WhatWg**;

class ****InvalidUrlException****
extends
[Uri\InvalidUriException](class.uri-invaliduriexception.md)
{

/\* Propriedades \*/

public
readonly
[array](language.types.array.md)
[$errors](class.uri-whatwg-invalidurlexception.md#uri-whatwg-invalidurlexception.props.errors);

/\* Propriedades herdadas \*/

protected
[string](language.types.string.md)
[$message](class.exception.md#exception.props.message) = "";

private
[string](language.types.string.md)
[$string](class.exception.md#exception.props.string) = "";

protected
[int](language.types.integer.md)
[$code](class.exception.md#exception.props.code);

protected
[string](language.types.string.md)
[$file](class.exception.md#exception.props.file) = "";

protected
[int](language.types.integer.md)
[$line](class.exception.md#exception.props.line);

private
[array](language.types.array.md)
[$trace](class.exception.md#exception.props.trace) = [];

private
?[Throwable](class.throwable.md)
[$previous](class.exception.md#exception.props.previous) = null;

/\* Métodos \*/

public function [\_\_construct](uri-whatwg-invalidurlexception.construct.md)(  
    [string](language.types.string.md) `$message` = "",  
    [array](language.types.array.md) `$errors` = [],  
    [int](language.types.integer.md) `$code` = 0,  
    [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**  
)

/\* Métodos herdados \*/

final public function [Exception::getMessage](exception.getmessage.md)(): [string](language.types.string.md)

final public function [Exception::getPrevious](exception.getprevious.md)(): [?](language.types.null.md)[Throwable](class.throwable.md)

final public function [Exception::getCode](exception.getcode.md)(): [int](language.types.integer.md)

final public function [Exception::getFile](exception.getfile.md)(): [string](language.types.string.md)

final public function [Exception::getLine](exception.getline.md)(): [int](language.types.integer.md)

final public function [Exception::getTrace](exception.gettrace.md)(): [array](language.types.array.md)

final public function [Exception::getTraceAsString](exception.gettraceasstring.md)(): [string](language.types.string.md)

public function [Exception::\_\_toString](exception.tostring.md)(): [string](language.types.string.md)

private function [Exception::\_\_clone](exception.clone.md)(): [void](language.types.void.md)

}

## Propriedades

errors
:   Um [array](language.types.array.md) de objetos [Uri\WhatWg\UrlValidationError](class.uri-whatwg-urlvalidationerror.md).

## Índice

- [Uri\WhatWg\InvalidUrlException::\_\_construct](uri-whatwg-invalidurlexception.construct.md) — Constrói um objeto InvalidUrlException

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
