# A classe MongoDB\Driver\Session

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-session.php

---

# A classe MongoDB\Driver\Session

(mongodb >=1.4.0)

## Introdução

A classe **MongoDB\Driver\Session** representa uma
sessão do cliente e é retornada por
[MongoDB\Driver\Manager::startSession()](mongodb-driver-manager.startsession.md). Comandos,
consultas e operações de gravação podem então ser associados à sessão.

## Resumo da classe

final

class **MongoDB\Driver\Session**
{

/\* Constantes \*/

const
[string](language.types.string.md)
[TRANSACTION\_NONE](class.mongodb-driver-session.md#mongodb-driver-session.constants.transaction-none) = none;

const
[string](language.types.string.md)
[TRANSACTION\_STARTING](class.mongodb-driver-session.md#mongodb-driver-session.constants.transaction-starting) = starting;

const
[string](language.types.string.md)
[TRANSACTION\_IN\_PROGRESS](class.mongodb-driver-session.md#mongodb-driver-session.constants.transaction-in-progress) = in\_progress;

const
[string](language.types.string.md)
[TRANSACTION\_COMMITTED](class.mongodb-driver-session.md#mongodb-driver-session.constants.transaction-committed) = committed;

const
[string](language.types.string.md)
[TRANSACTION\_ABORTED](class.mongodb-driver-session.md#mongodb-driver-session.constants.transaction-aborted) = aborted;

/\* Métodos \*/

final public function [abortTransaction](mongodb-driver-session.aborttransaction.md)(): [void](language.types.void.md)

final public function [advanceClusterTime](mongodb-driver-session.advanceclustertime.md)([array](language.types.array.md)|[object](language.types.object.md) `$clusterTime`): [void](language.types.void.md)

final public function [advanceOperationTime](mongodb-driver-session.advanceoperationtime.md)([MongoDB\BSON\TimestampInterface](class.mongodb-bson-timestampinterface.md) `$operationTime`): [void](language.types.void.md)

final public function [commitTransaction](mongodb-driver-session.committransaction.md)(): [void](language.types.void.md)

final private function [\_\_construct](mongodb-driver-session.construct.md)()

final public function [endSession](mongodb-driver-session.endsession.md)(): [void](language.types.void.md)

final public function [getClusterTime](mongodb-driver-session.getclustertime.md)(): [?](language.types.null.md)[object](language.types.object.md)

final public function [getLogicalSessionId](mongodb-driver-session.getlogicalsessionid.md)(): [object](language.types.object.md)

final public function [getOperationTime](mongodb-driver-session.getoperationtime.md)(): [?](language.types.null.md)[MongoDB\BSON\Timestamp](class.mongodb-bson-timestamp.md)

final public function [getServer](mongodb-driver-session.getserver.md)(): [?](language.types.null.md)[MongoDB\Driver\Server](class.mongodb-driver-server.md)

final public function [getTransactionOptions](mongodb-driver-session.gettransactionoptions.md)(): [?](language.types.null.md)[array](language.types.array.md)

final public function [getTransactionState](mongodb-driver-session.gettransactionstate.md)(): [string](language.types.string.md)

final public function [isDirty](mongodb-driver-session.isdirty.md)(): [bool](language.types.boolean.md)

final public function [isInTransaction](mongodb-driver-session.isintransaction.md)(): [bool](language.types.boolean.md)

final public function [startTransaction](mongodb-driver-session.starttransaction.md)([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [void](language.types.void.md)

}

## Constantes predefinidas

**`MongoDB\Driver\Session::TRANSACTION_NONE`**
:   Não há nenhuma transação em andamento.

**`MongoDB\Driver\Session::TRANSACTION_STARTING`**
:   Uma transação foi iniciada, mas nenhuma operação foi enviada ao servidor.

**`MongoDB\Driver\Session::TRANSACTION_IN_PROGRESS`**
:   Uma transação está em andamento.

**`MongoDB\Driver\Session::TRANSACTION_COMMITTED`**
:   A transação foi confirmada.

**`MongoDB\Driver\Session::TRANSACTION_ABORTED`**
:   A transação foi abortada.

## Índice

- [MongoDB\Driver\Session::abortTransaction](mongodb-driver-session.aborttransaction.md) — Aborta uma transação
- [MongoDB\Driver\Session::advanceClusterTime](mongodb-driver-session.advanceclustertime.md) — Avança o tempo do cluster para esta sessão
- [MongoDB\Driver\Session::advanceOperationTime](mongodb-driver-session.advanceoperationtime.md) — Avança o tempo de operação desta sessão
- [MongoDB\Driver\Session::commitTransaction](mongodb-driver-session.committransaction.md) — Confirma uma transação
- [MongoDB\Driver\Session::\_\_construct](mongodb-driver-session.construct.md) — Cria uma nova sessão (não utilizada)
- [MongoDB\Driver\Session::endSession](mongodb-driver-session.endsession.md) — Termina uma sessão
- [MongoDB\Driver\Session::getClusterTime](mongodb-driver-session.getclustertime.md) — Retorna o tempo do cluster para esta sessão
- [MongoDB\Driver\Session::getLogicalSessionId](mongodb-driver-session.getlogicalsessionid.md) — Retorna o ID da sessão lógica desta sessão
- [MongoDB\Driver\Session::getOperationTime](mongodb-driver-session.getoperationtime.md) — Retorna o tempo de operação desta sessão
- [MongoDB\Driver\Session::getServer](mongodb-driver-session.getserver.md) — Retorna o servidor ao qual esta sessão está fixada
- [MongoDB\Driver\Session::getTransactionOptions](mongodb-driver-session.gettransactionoptions.md) — Retorna opções para a transação atualmente em execução
- [MongoDB\Driver\Session::getTransactionState](mongodb-driver-session.gettransactionstate.md) — Retorna o estado atual da transação para esta sessão
- [MongoDB\Driver\Session::isDirty](mongodb-driver-session.isdirty.md) — Retorna se a sessão foi marcada como suja
- [MongoDB\Driver\Session::isInTransaction](mongodb-driver-session.isintransaction.md) — Retorna se uma transação com vários documentos está em andamento
- [MongoDB\Driver\Session::startTransaction](mongodb-driver-session.starttransaction.md) — Inicia uma transação

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
