# A classe MongoDB\Driver\BulkWriteCommandResult

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-bulkwritecommandresult.php

---

# A classe MongoDB\Driver\BulkWriteCommandResult

(mongodb >=2.1.0)

## Introdução

A classe **MongoDB\Driver\BulkWriteCommandResult**
encapsula informações sobre um
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md) executado e é retornada por
[MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md).

## Resumo da classe

final

class **MongoDB\Driver\BulkWriteCommandResult**
{

/\* Métodos \*/

final public function [getDeletedCount](mongodb-driver-bulkwritecommandresult.getdeletedcount.md)(): [int](language.types.integer.md)

final public function [getDeleteResults](mongodb-driver-bulkwritecommandresult.getdeleteresults.md)(): [?](language.types.null.md)[MongoDB\BSON\Document](class.mongodb-bson-document.md)

final public function [getInsertedCount](mongodb-driver-bulkwritecommandresult.getinsertedcount.md)(): [int](language.types.integer.md)

final public function [getInsertResults](mongodb-driver-bulkwritecommandresult.getinsertresults.md)(): [?](language.types.null.md)[MongoDB\BSON\Document](class.mongodb-bson-document.md)

final public function [getMatchedCount](mongodb-driver-bulkwritecommandresult.getmatchedcount.md)(): [int](language.types.integer.md)

final public function [getModifiedCount](mongodb-driver-bulkwritecommandresult.getmodifiedcount.md)(): [int](language.types.integer.md)

final public function [getUpdateResults](mongodb-driver-bulkwritecommandresult.getupdateresults.md)(): [?](language.types.null.md)[MongoDB\BSON\Document](class.mongodb-bson-document.md)

final public function [getUpsertedCount](mongodb-driver-bulkwritecommandresult.getupsertedcount.md)(): [int](language.types.integer.md)

final public function [isAcknowledged](mongodb-driver-bulkwritecommandresult.isacknowledged.md)(): [bool](language.types.boolean.md)

}

## Índice

- [MongoDB\Driver\BulkWriteCommandResult::getDeletedCount](mongodb-driver-bulkwritecommandresult.getdeletedcount.md) — Retorna o número de documentos excluídos
- [MongoDB\Driver\BulkWriteCommandResult::getDeleteResults](mongodb-driver-bulkwritecommandresult.getdeleteresults.md) — Retorna resultados detalhados para exclusões bem-sucedidas
- [MongoDB\Driver\BulkWriteCommandResult::getInsertedCount](mongodb-driver-bulkwritecommandresult.getinsertedcount.md) — Retorna o número de documentos inseridos
- [MongoDB\Driver\BulkWriteCommandResult::getInsertResults](mongodb-driver-bulkwritecommandresult.getinsertresults.md) — Retorna resultados detalhados para inserções bem-sucedidas
- [MongoDB\Driver\BulkWriteCommandResult::getMatchedCount](mongodb-driver-bulkwritecommandresult.getmatchedcount.md) — Retorna o número de documentos selecionados para atualização
- [MongoDB\Driver\BulkWriteCommandResult::getModifiedCount](mongodb-driver-bulkwritecommandresult.getmodifiedcount.md) — Retorna o número de documentos existentes atualizados
- [MongoDB\Driver\BulkWriteCommandResult::getUpdateResults](mongodb-driver-bulkwritecommandresult.getupdateresults.md) — Retorna resultados detalhados para atualizações bem-sucedidas
- [MongoDB\Driver\BulkWriteCommandResult::getUpsertedCount](mongodb-driver-bulkwritecommandresult.getupsertedcount.md) — Retorna o número de documentos inseridos ou atualizados
- [MongoDB\Driver\BulkWriteCommandResult::isAcknowledged](mongodb-driver-bulkwritecommandresult.isacknowledged.md) — Retorna se a gravação foi reconhecida

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
