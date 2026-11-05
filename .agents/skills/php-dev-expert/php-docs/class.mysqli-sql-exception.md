# A classe mysqli_sql_exception

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysqli-sql-exception.php

---

# A classe mysqli\_sql\_exception

(PHP 5, PHP 7, PHP 8)

## Introdução

A classe de manipulação de exceção mysqli.

## Resumo da classe

final
class ****mysqli\_sql\_exception****
extends
[RuntimeException](class.runtimeexception.md)
{

/\* Propriedades \*/

protected
[string](language.types.string.md)
[$sqlstate](class.mysqli-sql-exception.md#mysqli-sql-exception.props.sqlstate) = "00000";

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

public function [getSqlState](mysqli-sql-exception.getsqlstate.md)(): [string](language.types.string.md)

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

## Propriedades

sqlstate
:   O estado sql com o erro.

## Índice

- [mysqli\_sql\_exception::getSqlState](mysqli-sql-exception.getsqlstate.md) — Retorna o código de erro SQLSTATE

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
