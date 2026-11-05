# A classe MongoDB\Driver\WriteResult

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-writeresult.php

---

# A classe MongoDB\Driver\WriteResult

(mongodb >=1.0.0)

## Introdução

A classe **MongoDB\Driver\WriteResult** encapsula
informações sobre um
[MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) executado e pode ser retornada por
[MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md).

## Resumo da classe

final

class **MongoDB\Driver\WriteResult**
{

/\* Propriedades \*/

public
readonly
?[int](language.types.integer.md)
[$insertedCount](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.insertedcount);

public
readonly
?[int](language.types.integer.md)
[$matchedCount](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.matchedcount);

public
readonly
?[int](language.types.integer.md)
[$modifiedCount](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.modifiedcount);

public
readonly
?[int](language.types.integer.md)
[$deletedCount](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.deletedcount);

public
readonly
?[int](language.types.integer.md)
[$upsertedCount](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.upsertedcount);

public
readonly
[MongoDB\Driver\Server](class.mongodb-driver-server.md)
[$server](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.server);

public
readonly
[array](language.types.array.md)
[$upsertedIds](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.upsertedids);

public
readonly
[array](language.types.array.md)
[$writeErrors](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.writeerrors);

public
readonly
?[MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md)
[$writeConcernError](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.writeconcernerror);

public
readonly
?[MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
[$writeConcern](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.writeconcern);

public
readonly
[array](language.types.array.md)
[$errorReplies](class.mongodb-driver-writeresult.md#mongodb-driver-writeresult.props.errorreplies);

/\* Métodos \*/

final public function [getDeletedCount](mongodb-driver-writeresult.getdeletedcount.md)(): [int](language.types.integer.md)

final public function [getInsertedCount](mongodb-driver-writeresult.getinsertedcount.md)(): [int](language.types.integer.md)

final public function [getMatchedCount](mongodb-driver-writeresult.getmatchedcount.md)(): [int](language.types.integer.md)

final public function [getModifiedCount](mongodb-driver-writeresult.getmodifiedcount.md)(): [int](language.types.integer.md)

final public function [getServer](mongodb-driver-writeresult.getserver.md)(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

final public function [getUpsertedCount](mongodb-driver-writeresult.getupsertedcount.md)(): [int](language.types.integer.md)

final public function [getUpsertedIds](mongodb-driver-writeresult.getupsertedids.md)(): [array](language.types.array.md)

final public function [getWriteConcernError](mongodb-driver-writeresult.getwriteconcernerror.md)(): [?](language.types.null.md)[MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md)

final public function [getWriteErrors](mongodb-driver-writeresult.getwriteerrors.md)(): [array](language.types.array.md)

final public function [isAcknowledged](mongodb-driver-writeresult.isacknowledged.md)(): [bool](language.types.boolean.md)

}

## Propriedades

insertedCount
:   O número de documentos inseridos (excluindo upserts), ou **`null`** se
    o responsável pela gravação não solicitou confirmação.

matchedCount
:   O número de documentos correspondentes às operações de atualização e substituição, ou
    **`null`** se a entidade responsável pela gravação não solicitou confirmação.

modifiedCount
:   O número de documentos modificados por operações de atualização e substituição, ou
    **`null`** se a entidade gravadora não solicitou confirmação ou se o
    servidor não reportou esta informação.

deletedCount
:   O número de documentos excluídos, ou **`null`** se a entidade responsável
    pela gravação não solicitou confirmação.

upsertedCount
:   O número de documentos inseridos ou **`null`** se a entidade responsável pela
    gravação não solicitou confirmação.

server
:   O servidor que executou a gravação em massa.

upsertedIds
:   Um array de valores `_id` para documentos inseridos e atualizados (upsert).
    As chaves do array corresponderão ao índice da operação de gravação de
    [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md).

writeErrors
:   Um array de [MongoDB\Driver\WriteError](class.mongodb-driver-writeerror.md)s para quaisquer
    erros de gravação que ocorreram durante a execução.

writeConcernError
:   O erro [MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md) que
    ocorreu, ou **`null`** se nenhum erro de write concern ocorreu.

writeConcern
:   O [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) usado para a
    gravação em massa, ou **`null`** se não estiver disponível.

errorReplies
:   Um array de documentos de resposta de erro do servidor.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\WriteResult::getDeletedCount](mongodb-driver-writeresult.getdeletedcount.md) — Retorna o número de documentos excluídos
- [MongoDB\Driver\WriteResult::getInsertedCount](mongodb-driver-writeresult.getinsertedcount.md) — Retorna o número de documentos inseridos (excluindo inserções de atualização)
- [MongoDB\Driver\WriteResult::getMatchedCount](mongodb-driver-writeresult.getmatchedcount.md) — Retorna o número de documentos selecionados para atualização
- [MongoDB\Driver\WriteResult::getModifiedCount](mongodb-driver-writeresult.getmodifiedcount.md) — Retorna o número de documentos existentes atualizados
- [MongoDB\Driver\WriteResult::getServer](mongodb-driver-writeresult.getserver.md) — Retorna o servidor associado a este resultado de gravação
- [MongoDB\Driver\WriteResult::getUpsertedCount](mongodb-driver-writeresult.getupsertedcount.md) — Retorna o número de documentos inseridos por uma inserção de atualização
- [MongoDB\Driver\WriteResult::getUpsertedIds](mongodb-driver-writeresult.getupsertedids.md) — Retorna um array de identificadores para documentos inseridos por atualização
- [MongoDB\Driver\WriteResult::getWriteConcernError](mongodb-driver-writeresult.getwriteconcernerror.md) — Retorna qualquer erro de gravação ocorrido
- [MongoDB\Driver\WriteResult::getWriteErrors](mongodb-driver-writeresult.getwriteerrors.md) — Retorna quaisquer erros de gravação ocorridos
- [MongoDB\Driver\WriteResult::isAcknowledged](mongodb-driver-writeresult.isacknowledged.md) — Retorna se a gravação foi reconhecida

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
