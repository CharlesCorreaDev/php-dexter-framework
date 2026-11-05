# A classe RuntimeException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.runtimeexception.php

---

# A classe RuntimeException

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Exceção lançada se ocorrer um erro que só pode ser encontrado em tempo de execução.

## Resumo da classe

class ****RuntimeException****
extends
[Exception](class.exception.md)
{

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

/\* Métodos herdados \*/

public function [Exception::\_\_construct](exception.construct.md)([string](language.types.string.md) `$message` = "", [int](language.types.integer.md) `$code` = 0, [?](language.types.null.md)[Throwable](class.throwable.md) `$previous` = **`null`**)

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
