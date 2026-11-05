# A classe MongoDB\Driver\Exception\CommandException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-exception-commandexception.php

---

# A classe MongoDB\Driver\Exception\CommandException

(mongodb >= 1.5.0)

## Introdução

Lançada quando um comando falha.

## Resumo da classe

class **MongoDB\Driver\Exception\CommandException**

extends
[MongoDB\Driver\Exception\ServerException](class.mongodb-driver-exception-serverexception.md)
implements
[MongoDB\Driver\Exception\Exception](class.mongodb-driver-exception-exception.md) {

/\* Propriedades \*/

public
readonly
[object](language.types.object.md)
[$resultDocument](class.mongodb-driver-exception-commandexception.md#mongodb-driver-exception-commandexception.props.resultdocument);

/\* Propriedades herdadas \*/

protected
?[array](language.types.array.md)
[$errorLabels](class.mongodb-driver-exception-runtimeexception.md#mongodb-driver-exception-runtimeexception.props.errorlabels);

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

final public function [getResultDocument](mongodb-driver-commandexception.getresultdocument.md)(): [object](language.types.object.md)

/\* Métodos herdados \*/

final public function [MongoDB\Driver\Exception\RuntimeException::hasErrorLabel](mongodb-driver-runtimeexception.haserrorlabel.md)([string](language.types.string.md) `$errorLabel`): [bool](language.types.boolean.md)

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

resultDocument
:   O documento de resultado associado ao comando com falha.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | A propriedade resultDocument agora é public readonly. |

## Índice

- [MongoDB\Driver\Exception\CommandException::getResultDocument](mongodb-driver-commandexception.getresultdocument.md) — Retorna o documento de resultado do comando com falha

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
