# A classe MongoDB\Driver\Server

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-server.php

---

# A classe MongoDB\Driver\Server

(mongodb >=1.0.0)

## Introdução

## Resumo da classe

final

class **MongoDB\Driver\Server**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[TYPE\_UNKNOWN](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-unknown) = 0;

const
[int](language.types.integer.md)
[TYPE\_STANDALONE](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-standalone) = 1;

const
[int](language.types.integer.md)
[TYPE\_MONGOS](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-mongos) = 2;

const
[int](language.types.integer.md)
[TYPE\_POSSIBLE\_PRIMARY](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-possible-primary) = 3;

const
[int](language.types.integer.md)
[TYPE\_RS\_PRIMARY](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-rs-primary) = 4;

const
[int](language.types.integer.md)
[TYPE\_RS\_SECONDARY](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-rs-secondary) = 5;

const
[int](language.types.integer.md)
[TYPE\_RS\_ARBITER](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-rs-arbiter) = 6;

const
[int](language.types.integer.md)
[TYPE\_RS\_OTHER](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-rs-other) = 7;

const
[int](language.types.integer.md)
[TYPE\_RS\_GHOST](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-rs-ghost) = 8;

const
[int](language.types.integer.md)
[TYPE\_LOAD\_BALANCER](class.mongodb-driver-server.md#mongodb-driver-server.constants.type-load-balancer) = 9;

/\* Métodos \*/

final private function [\_\_construct](mongodb-driver-server.construct.md)()

final public function [executeBulkWrite](mongodb-driver-server.executebulkwrite.md)([string](language.types.string.md) `$namespace`, [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) `$bulk`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)

final public function [executeBulkWriteCommand](mongodb-driver-server.executebulkwritecommand.md)([MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md) `$bulk`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)

final public function [executeCommand](mongodb-driver-server.executecommand.md)([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [executeQuery](mongodb-driver-server.executequery.md)([string](language.types.string.md) `$namespace`, [MongoDB\Driver\Query](class.mongodb-driver-query.md) `$query`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [executeReadCommand](mongodb-driver-server.executereadcommand.md)([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [executeReadWriteCommand](mongodb-driver-server.executereadwritecommand.md)([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [executeWriteCommand](mongodb-driver-server.executewritecommand.md)([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [getHost](mongodb-driver-server.gethost.md)(): [string](language.types.string.md)

final public function [getInfo](mongodb-driver-server.getinfo.md)(): [array](language.types.array.md)

final public function [getLatency](mongodb-driver-server.getlatency.md)(): [?](language.types.null.md)[integer](language.types.integer.md)

final public function [getPort](mongodb-driver-server.getport.md)(): [int](language.types.integer.md)

final public function [getServerDescription](mongodb-driver-server.getserverdescription.md)(): [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)

final public function [getTags](mongodb-driver-server.gettags.md)(): [array](language.types.array.md)

final public function [getType](mongodb-driver-server.gettype.md)(): [int](language.types.integer.md)

final public function [isArbiter](mongodb-driver-server.isarbiter.md)(): [bool](language.types.boolean.md)

final public function [isHidden](mongodb-driver-server.ishidden.md)(): [bool](language.types.boolean.md)

final public function [isPassive](mongodb-driver-server.ispassive.md)(): [bool](language.types.boolean.md)

final public function [isPrimary](mongodb-driver-server.isprimary.md)(): [bool](language.types.boolean.md)

final public function [isSecondary](mongodb-driver-server.issecondary.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`MongoDB\Driver\Server::TYPE_UNKNOWN`**
:   Tipo de servidor desconhecido, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

**`MongoDB\Driver\Server::TYPE_STANDALONE`**
:   Tipo de servidor autônomo, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

**`MongoDB\Driver\Server::TYPE_MONGOS`**
:   Tipo de servidor Mongos, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

**`MongoDB\Driver\Server::TYPE_POSSIBLE_PRIMARY`**
:   Tipo de servidor conjunto de réplicas, possivelmente primário, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

    Um servidor pode ser identificado como um possível primário se ainda não tiver sido verificado, mas outro membro do conjunto de réplicas pensa que é o primário.

**`MongoDB\Driver\Server::TYPE_RS_PRIMARY`**
:   Tipo de servidor conjunto de réplicas primário, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

**`MongoDB\Driver\Server::TYPE_RS_SECONDARY`**
:   Tipo de servidor conjunto de réplicas secundário, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

**`MongoDB\Driver\Server::TYPE_RS_ARBITER`**
:   Tipo de servidor conjunto de réplicas árbitro, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

**`MongoDB\Driver\Server::TYPE_RS_OTHER`**
:   Tipo de servidor conjunto de réplicas outros, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

    Esses servidores podem estar ocultos, inicializando ou recuperando. Eles não podem ser consultados, mas suas listas de hosts são úteis para descobrir a configuração atual do conjunto de réplicas.

**`MongoDB\Driver\Server::TYPE_RS_GHOST`**
:   Tipo de servidor conjunto de réplicas fantasma, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

    Os servidores podem ser identificados como tal em pelo menos três situações: brevemente durante a inicialização do servidor; em um conjunto de réplicas não inicializado; ou quando o servidor é evitado (ou seja, removido da configuração do conjunto de réplicas). Eles não podem ser consultados, nem sua lista de hosts pode ser usada para descobrir a configuração atual do conjunto de réplicas; entretanto, o cliente pode monitorar este servidor na esperança de que ele faça a transição para um estado mais útil.

**`MongoDB\Driver\Server::TYPE_LOAD_BALANCER`**
:   Tipo de servidor balanceador de carga, retornada por [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md).

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.11.0 | A constante **`MongoDB\Driver\Server::TYPE_LOAD_BALANCER`** foi adicionada. |

## Índice

- [MongoDB\Driver\Server::\_\_construct](mongodb-driver-server.construct.md) — Cria um novo servidor (não utilizado)
- [MongoDB\Driver\Server::executeBulkWrite](mongodb-driver-server.executebulkwrite.md) — Executa uma ou mais operações de gravação neste servidor
- [MongoDB\Driver\Server::executeBulkWriteCommand](mongodb-driver-server.executebulkwritecommand.md) — Executa operações de gravação neste servidor usando o comando bulkWrite
- [MongoDB\Driver\Server::executeCommand](mongodb-driver-server.executecommand.md) — Executa um comando de banco de dados neste servidor
- [MongoDB\Driver\Server::executeQuery](mongodb-driver-server.executequery.md) — Executa uma consulta de banco de dados neste servidor
- [MongoDB\Driver\Server::executeReadCommand](mongodb-driver-server.executereadcommand.md) — Executa um comando de banco de dados que lê neste servidor
- [MongoDB\Driver\Server::executeReadWriteCommand](mongodb-driver-server.executereadwritecommand.md) — Executa um comando de banco de dados que lê e grava neste servidor
- [MongoDB\Driver\Server::executeWriteCommand](mongodb-driver-server.executewritecommand.md) — Executa um comando de banco de dados que grava neste servidor
- [MongoDB\Driver\Server::getHost](mongodb-driver-server.gethost.md) — Retorna o nome do host deste servidor
- [MongoDB\Driver\Server::getInfo](mongodb-driver-server.getinfo.md) — Retorna um array de informações que descrevem este servidor
- [MongoDB\Driver\Server::getLatency](mongodb-driver-server.getlatency.md) — Retorna a latência deste servidor em milissegundos
- [MongoDB\Driver\Server::getPort](mongodb-driver-server.getport.md) — Retorna a porta na qual este servidor está escutando
- [MongoDB\Driver\Server::getServerDescription](mongodb-driver-server.getserverdescription.md) — Retorna uma descrição para este servidor
- [MongoDB\Driver\Server::getTags](mongodb-driver-server.gettags.md) — Retorna um array de tags que descrevem este servidor em um conjunto de réplicas
- [MongoDB\Driver\Server::getType](mongodb-driver-server.gettype.md) — Retorna um número inteiro denotando o tipo deste servidor
- [MongoDB\Driver\Server::isArbiter](mongodb-driver-server.isarbiter.md) — Verifica se este servidor é um membro árbitro de um conjunto de réplicas
- [MongoDB\Driver\Server::isHidden](mongodb-driver-server.ishidden.md) — Verifica se este servidor é um membro oculto de um conjunto de réplicas
- [MongoDB\Driver\Server::isPassive](mongodb-driver-server.ispassive.md) — Verifica se este servidor é um membro passivo de um conjunto de réplicas
- [MongoDB\Driver\Server::isPrimary](mongodb-driver-server.isprimary.md) — Verifica se este servidor é um membro primário de um conjunto de réplicas
- [MongoDB\Driver\Server::isSecondary](mongodb-driver-server.issecondary.md) — Verifica se este servidor é um membro secundário de um conjunto de réplicas

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
