# A classe MongoDB\Driver\Exception\BulkWriteException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-exception-bulkwriteexception.php

---

# A classe MongoDB\Driver\Exception\BulkWriteException

(mongodb >= 1.0.0)

## Introdução

Lançada quando uma operação de gravação em massa falha.

## Resumo da classe

class **MongoDB\Driver\Exception\BulkWriteException**

extends
[MongoDB\Driver\Exception\ServerException](class.mongodb-driver-exception-serverexception.md)
implements
[MongoDB\Driver\Exception\Exception](class.mongodb-driver-exception-exception.md) {

/\* Propriedades \*/

public
readonly
[MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)
[$writeResult](class.mongodb-driver-exception-bulkwriteexception.md#mongodb-driver-exception-bulkwriteexception.props.writeresult);

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

final public function [getWriteResult](mongodb-driver-bulkwriteexception.getwriteresult.md)(): [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)

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

writeResult
:   O objeto [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md) associado com
    a operação de escrita falhada.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | A propriedade writeResult agora é public readonly. |
| PECL mongodb 2.0.0 | Esta classe agora estende [MongoDB\Driver\Exception\ServerException](class.mongodb-driver-exception-serverexception.md) em vez de [MongoDB\Driver\Exception\WriteException](class.mongodb-driver-exception-writeexception.md). |

## Índice

- [MongoDB\Driver\Exception\BulkWriteException::getWriteResult](mongodb-driver-bulkwriteexception.getwriteresult.md) — Retorna o WriteResult para a operação de escrita com falha

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
