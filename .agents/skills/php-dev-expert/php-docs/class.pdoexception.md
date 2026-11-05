# A classe PDOException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.pdoexception.php

---

# A classe PDOException

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Representa um erro levantado pelo PDO. Não se deve lançar uma
**PDOException** de dentro do código do usuário.
Veja [Exceções](language.error-handling.throwable.md#language.exceptions) para mais
informações sobre Exceções em PHP.

## Resumo da classe

class ****PDOException****
extends
[RuntimeException](class.runtimeexception.md)
{

/\* Propriedades \*/

protected
[int](language.types.integer.md)|[string](language.types.string.md)
[$code](class.pdoexception.md#pdoexception.props.code);

public
?[array](language.types.array.md)
[$errorInfo](class.pdoexception.md#pdoexception.props.errorinfo) = null;

/\* Propriedades herdadas \*/

protected
[string](language.types.string.md)
[$message](class.exception.md#exception.props.message) = "";

private
[string](language.types.string.md)
[$string](class.exception.md#exception.props.string) = "";

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

## Propriedades

errorInfo
:   Corresponde a [PDO::errorInfo()](pdo.errorinfo.md) ou
    [PDOStatement::errorInfo()](pdostatement.errorinfo.md)

code
:   Código de erro `SQLSTATE`. Use
    [Exception::getCode()](exception.getcode.md) para acessá-lo.

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
