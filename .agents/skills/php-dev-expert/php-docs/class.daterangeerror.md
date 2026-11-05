# A classe DateRangeError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.daterangeerror.php

---

# A classe DateRangeError

(PHP 8 >= 8.3.0)

## Introdução

Disparada por [DateTime::getTimestamp()](datetime.gettimestamp.md),
[DateTimeImmutable::getTimestamp()](datetime.gettimestamp.md) e
[date\_timestamp\_get()](function.date-timestamp-get.md)em plataformas de 32 bits se o
objeto representa uma data fora da faixa de inteiros de 32 bits com sinal.

## Resumo da classe

class ****DateRangeError****
extends
[DateError](class.dateerror.md)
{

/\* Propriedades herdadas \*/

protected
[string](language.types.string.md)
[$message](class.error.md#error.props.message) = "";

private
[string](language.types.string.md)
[$string](class.error.md#error.props.string) = "";

protected
[int](language.types.integer.md)
[$code](class.error.md#error.props.code);

protected
[string](language.types.string.md)
[$file](class.error.md#error.props.file) = "";

protected
[int](language.types.integer.md)
[$line](class.error.md#error.props.line);

private
[array](language.types.array.md)
[$trace](class.error.md#error.props.trace) = [];

private
?[Throwable](class.throwable.md)
[$previous](class.error.md#error.props.previous) = null;

/\* Métodos herdados \*/

public function [Error::\_\_construct](error.construct.md)([string](language.types.string.md) `$message` = "", [int](language.types.integer.md) `$code` = 0, [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**)

final public function [Error::getMessage](error.getmessage.md)(): [string](language.types.string.md)

final public function [Error::getPrevious](error.getprevious.md)(): [?](language.types.null.md)[Throwable](class.throwable.md)

final public function [Error::getCode](error.getcode.md)(): [int](language.types.integer.md)

final public function [Error::getFile](error.getfile.md)(): [string](language.types.string.md)

final public function [Error::getLine](error.getline.md)(): [int](language.types.integer.md)

final public function [Error::getTrace](error.gettrace.md)(): [array](language.types.array.md)

final public function [Error::getTraceAsString](error.gettraceasstring.md)(): [string](language.types.string.md)

public function [Error::\_\_toString](error.tostring.md)(): [string](language.types.string.md)

private function [Error::\_\_clone](error.clone.md)(): [void](language.types.void.md)

}

## Veja também

- [DateError](class.dateerror.md)
- [DateObjectError](class.dateobjecterror.md)

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
