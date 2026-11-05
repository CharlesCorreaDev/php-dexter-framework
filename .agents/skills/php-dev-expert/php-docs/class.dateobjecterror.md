# A classe DateObjectError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dateobjecterror.php

---

# A classe DateObjectError

(PHP 8 >= 8.3.0)

## Introdução

Disparada quando uma das classe de Data/Horário não foi corretamente
inicializada.

Como as classes de Data/Horário não são finais, eles podem ser herdadas.
Quando um construtor da classe superior não for chamado, este erro é lançado. Este é
sempre um erro de programação.

## Resumo da classe

class ****DateObjectError****
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
- [DateRangeError](class.daterangeerror.md)

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
