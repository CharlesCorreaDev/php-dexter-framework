# A classe MongoDB\Driver\Exception\ExecutionTimeoutException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-exception-executiontimeoutexception.php

---

# A classe MongoDB\Driver\Exception\ExecutionTimeoutException

(mongodb >= 1.0.0)

## Introdução

Lançada quando uma consulta ou comando não é concluído dentro de um limite de tempo
especificado (por exemplo,
[» maxTimeMS](https://www.mongodb.com/docs/manual/tutorial/terminate-running-operations/#maxtimems)).

## Resumo da classe

final

class **MongoDB\Driver\Exception\ExecutionTimeoutException**

extends
[MongoDB\Driver\Exception\ServerException](class.mongodb-driver-exception-serverexception.md)
implements
[MongoDB\Driver\Exception\Exception](class.mongodb-driver-exception-exception.md) {

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

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.5.0 | Esta classe agora estende a classe [MongoDB\Driver\Exception\ServerException](class.mongodb-driver-exception-serverexception.md) ao invés da classe [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md). |

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
