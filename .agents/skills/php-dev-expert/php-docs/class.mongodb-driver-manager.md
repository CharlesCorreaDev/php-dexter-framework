# A classe MongoDB\Driver\Manager

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-manager.php

---

# A classe MongoDB\Driver\Manager

(mongodb >=1.0.0)

## Introdução

A classe **MongoDB\Driver\Manager** é o principal ponto de entrada
para a extensão. É responsável por manter conexões com o MongoDB
(seja ele servidor independente, conjunto de réplicas ou cluster fragmentado).

Nenhuma conexão com o MongoDB é feita ao instanciar a classe.
Isso significa que o objeto **MongoDB\Driver\Manager** sempre pode ser
construído, mesmo que um ou mais servidores MongoDB estejam inativos.

Qualquer escrita ou consulta pode lançar exceções de conexão, pois as conexões são criadas lentamente.
Um servidor MongoDB também pode ficar indisponível durante a vida útil do script.
Portanto, é importante que todas as ações no objeto Manager sejam agrupadas em instruções try/catch.

## Resumo da classe

final

class **MongoDB\Driver\Manager**
{

/\* Métodos \*/

final public function [addSubscriber](mongodb-driver-manager.addsubscriber.md)([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) `$subscriber`): [void](language.types.void.md)

final public function [\_\_construct](mongodb-driver-manager.construct.md)([?](language.types.null.md)[string](language.types.string.md) `$uri` = **`null`**, [?](language.types.null.md)[array](language.types.array.md) `$uriOptions` = **`null`**, [?](language.types.null.md)[array](language.types.array.md) `$driverOptions` = **`null`**)

final public function [createClientEncryption](mongodb-driver-manager.createclientencryption.md)([array](language.types.array.md) `$options`): [MongoDB\Driver\ClientEncryption](class.mongodb-driver-clientencryption.md)

final public function [executeBulkWrite](mongodb-driver-manager.executebulkwrite.md)([string](language.types.string.md) `$namespace`, [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) `$bulk`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)

final public function [executeBulkWriteCommand](mongodb-driver-manager.executebulkwritecommand.md)([MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md) `$bulk`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)

final public function [executeCommand](mongodb-driver-manager.executecommand.md)([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [executeQuery](mongodb-driver-manager.executequery.md)([string](language.types.string.md) `$namespace`, [MongoDB\Driver\Query](class.mongodb-driver-query.md) `$query`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [executeReadCommand](mongodb-driver-manager.executereadcommand.md)([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [executeReadWriteCommand](mongodb-driver-manager.executereadwritecommand.md)([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [executeWriteCommand](mongodb-driver-manager.executewritecommand.md)([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [getEncryptedFieldsMap](mongodb-driver-manager.getencryptedfieldsmap.md)(): [array](language.types.array.md)|[object](language.types.object.md)|[null](language.types.null.md)

final public function [getReadConcern](mongodb-driver-manager.getreadconcern.md)(): [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md)

final public function [getReadPreference](mongodb-driver-manager.getreadpreference.md)(): [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md)

final public function [getServers](mongodb-driver-manager.getservers.md)(): [array](language.types.array.md)

final public function [getWriteConcern](mongodb-driver-manager.getwriteconcern.md)(): [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)

final public function [removeSubscriber](mongodb-driver-manager.removesubscriber.md)([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) `$subscriber`): [void](language.types.void.md)

final public function [selectServer](mongodb-driver-manager.selectserver.md)([?](language.types.null.md)[MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) `$readPreference` = **`null`**): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

final public function [startSession](mongodb-driver-manager.startsession.md)([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Session](class.mongodb-driver-session.md)

}

## Examples

**Exemplo #1 Exemplo básico de [MongoDB\Driver\Manager::\_\_construct()](mongodb-driver-manager.construct.md)**

A função [var\_dump()](function.var-dump.md) executada em um
objeto **MongoDB\Driver\Manager** irá mostrar vários
detalhes sobre o gerenciador do driver que não são normalmente expostas.
Isso pode ser útil para depurar como o driver visualiza a configuração do MongoDB e
quais opções são usadas.

```
<?php

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
var_dump($manager);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\Driver\Manager)#1 (2) {
  ["uri"]=>
  string(26) "mongodb://127.0.0.1:27017/"
  ["cluster"]=>
  array(0) {
  }
}
```

## Índice

- [MongoDB\Driver\Manager::addSubscriber](mongodb-driver-manager.addsubscriber.md) — Inscreve um assinante de evento de monitoramento com este gerenciador
- [MongoDB\Driver\Manager::\_\_construct](mongodb-driver-manager.construct.md) — Cria um novo gerenciador MongoDB
- [MongoDB\Driver\Manager::createClientEncryption](mongodb-driver-manager.createclientencryption.md) — Cria um novo objeto ClientEncryption
- [MongoDB\Driver\Manager::executeBulkWrite](mongodb-driver-manager.executebulkwrite.md) — Executa uma ou mais operações de escrita
- [MongoDB\Driver\Manager::executeBulkWriteCommand](mongodb-driver-manager.executebulkwritecommand.md) — Executa operações de gravação usando o comando bulkWrite
- [MongoDB\Driver\Manager::executeCommand](mongodb-driver-manager.executecommand.md) — Executa um comando de banco de dados
- [MongoDB\Driver\Manager::executeQuery](mongodb-driver-manager.executequery.md) — Executa uma consulta ao banco de dados
- [MongoDB\Driver\Manager::executeReadCommand](mongodb-driver-manager.executereadcommand.md) — Executa um comando de banco de dados que faz leitura
- [MongoDB\Driver\Manager::executeReadWriteCommand](mongodb-driver-manager.executereadwritecommand.md) — Executa um comando de banco de dados que lê e grava
- [MongoDB\Driver\Manager::executeWriteCommand](mongodb-driver-manager.executewritecommand.md) — Executa um comando de banco de dados que escreve
- [MongoDB\Driver\Manager::getEncryptedFieldsMap](mongodb-driver-manager.getencryptedfieldsmap.md) — Retorna a opção de mapa de campos critografados da criptografia automática para o gerenciador
- [MongoDB\Driver\Manager::getReadConcern](mongodb-driver-manager.getreadconcern.md) — Retorna a preocupação de leitura para o gerenciador
- [MongoDB\Driver\Manager::getReadPreference](mongodb-driver-manager.getreadpreference.md) — Retorna a preferência de leitura para o gerenciador
- [MongoDB\Driver\Manager::getServers](mongodb-driver-manager.getservers.md) — Retorna os servidores aos quais este gerenciador está conectado
- [MongoDB\Driver\Manager::getWriteConcern](mongodb-driver-manager.getwriteconcern.md) — Retorna a procupação de gravação para o gerenciador
- [MongoDB\Driver\Manager::removeSubscriber](mongodb-driver-manager.removesubscriber.md) — Cancela o registro de um assinante de evento de monitoramento com este gerenciador
- [MongoDB\Driver\Manager::selectServer](mongodb-driver-manager.selectserver.md) — Seleciona um servidor que corresponde a uma preferência de leitura
- [MongoDB\Driver\Manager::startSession](mongodb-driver-manager.startsession.md) — Inicia uma nova sessão de cliente para uso com este cliente

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
