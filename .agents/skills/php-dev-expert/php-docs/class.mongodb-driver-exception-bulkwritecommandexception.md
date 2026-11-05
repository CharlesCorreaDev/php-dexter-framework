# A classe MongoDB\Driver\Exception\BulkWriteCommandException

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-exception-bulkwritecommandexception.php

---

# A classe MongoDB\Driver\Exception\BulkWriteCommandException

(mongodb >=2.1.0)

## Introdução

Exceção gerada devido à falha na execução de um
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md). Os métodos desta
classe fornecem mais detalhes do erro ocorrido, incluindo a resposta do erro
e resultados parciais da gravação em massa.

## Resumo da classe

class **MongoDB\Driver\Exception\BulkWriteCommandException**

extends
[MongoDB\Driver\Exception\ServerException](class.mongodb-driver-exception-serverexception.md)
implements
[MongoDB\Driver\Exception\Exception](class.mongodb-driver-exception-exception.md) {

/\* Propriedades \*/

private
?[MongoDB\BSON\Document](class.mongodb-bson-document.md)
[$errorReply](class.mongodb-driver-exception-bulkwritecommandexception.md#mongodb-driver-exception-bulkwritecommandexception.props.errorreply);

private
?[MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)
[$partialResult](class.mongodb-driver-exception-bulkwritecommandexception.md#mongodb-driver-exception-bulkwritecommandexception.props.partialresult);

private
[array](language.types.array.md)
[$writeConcernErrors](class.mongodb-driver-exception-bulkwritecommandexception.md#mongodb-driver-exception-bulkwritecommandexception.props.writeconcernerrors);

private
[array](language.types.array.md)
[$writeErrors](class.mongodb-driver-exception-bulkwritecommandexception.md#mongodb-driver-exception-bulkwritecommandexception.props.writeerrors);

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

final public function [getErrorReply](mongodb-driver-bulkwritecommandexception.geterrorreply.md)(): [?](language.types.null.md)[MongoDB\BSON\Document](class.mongodb-bson-document.md)

final public function [getPartialResult](mongodb-driver-bulkwritecommandexception.getpartialresult.md)(): [?](language.types.null.md)[MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)

final public function [getWriteConcernErrors](mongodb-driver-bulkwritecommandexception.getwriteconcernerrors.md)(): [array](language.types.array.md)

final public function [getWriteErrors](mongodb-driver-bulkwritecommandexception.getwriteerrors.md)(): [array](language.types.array.md)

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

errorReply
:   Qualquer erro de nível superior que ocorreu ao tentar se comunicar com
    o servidor ou executar a gravação em massa. Este valor pode ser **`null`** se a
    exceção foi gerada devido a erros ocorridos em gravações individuais.

partialResult
:   Um [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md) relatando
    o resultado de quaisquer operações bem-sucedidas que foram executadas antes do
    erro ser encontrado. Este valor pode ser **`null`** se não for possível
    determinar que pelo menos uma gravação foi realizada com sucesso (e
    reconhecida).

writeConcernErrors
:   Um array de quaisquer [MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md)
    que ocorreram durante a execução da gravação em massa. Esta lista pode ter
    vários itens se mais de um comando de servidor foi necessário para executar
    a gravação em massa.

writeErrors
:   Um array de quaisquer [MongoDB\Driver\WriteError](class.mongodb-driver-writeerror.md)s
    que ocorreram durante a execução de operações de gravação individuais. As chaves do array
    corresponderão ao índice da operação de gravação de
    [MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md). Este mapa
    conterá no máximo uma entrada se a gravação em massa tiver sido ordenada.

## Índice

- [MongoDB\Driver\Exception\BulkWriteCommandException::getErrorReply](mongodb-driver-bulkwritecommandexception.geterrorreply.md) — Retorna qualquer erro de comando de nível superior
- [MongoDB\Driver\Exception\BulkWriteCommandException::getPartialResult](mongodb-driver-bulkwritecommandexception.getpartialresult.md) — Retorna o resultado de qualquer operação de gravação bem-sucedida
- [MongoDB\Driver\Exception\BulkWriteCommandException::getWriteConcernErrors](mongodb-driver-bulkwritecommandexception.getwriteconcernerrors.md) — Retorna quaisquer erros de preocupação de gravação
- [MongoDB\Driver\Exception\BulkWriteCommandException::getWriteErrors](mongodb-driver-bulkwritecommandexception.getwriteerrors.md) — Retorna quaisquer erros de gravação

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
