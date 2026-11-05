# Extensão MongoDB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.mongodb.php

---

# Extensão MongoDB

Esta extensão é desenvolvida sobre as bibliotecas
[» libmongoc](https://github.com/mongodb/mongo-c-driver) e
[» libbson](https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson).
Ela fornece uma API mínima para a funcionalidade principal do driver:
[comandos](class.mongodb-driver-command.md),
[consultas](class.mongodb-driver-query.md),
[gravações](class.mongodb-driver-bulkwrite.md),
[gerenciamento de conexão](class.mongodb-driver-manager.md)
e [serialização BSON](mongodb.bson.md).

As bibliotecas Userland PHP que dependem desta extensão podem fornecer APIs de
nível superior, como construtores de consultas, métodos auxiliares de comandos individuais e
GridFS. Os desenvolvedores de aplicações devem considerar o uso desta extensão em
conjunto com a
[» biblioteca MongoDB PHP](https://github.com/mongodb/mongo-php-library), que
implementa as mesmas APIs de nível superior encontradas nos drivers MongoDB para outras
linguagens. Esta separação de preocupações permite que a extensão se concentre em
características essenciais para as quais uma implementação de extensão é fundamental para
o desempenho.

- [Instalação/Configuração](mongodb.setup.md)
  - [Dependências](mongodb.requirements.md)
  - [Instalação](mongodb.installation.md)
  - [Configurações de Execução](mongodb.configuration.md)
- [Constantes predefinidas](mongodb.constants.md)
- [Tutoriais](mongodb.tutorial.md)
  - [Usando a Biblioteca do PHP para o MongoDB (PHPLIB)](mongodb.tutorial.library.md)
  - [Monitoramento de Desempenho de Aplicação (APM)](mongodb.tutorial.apm.md)
- [Arquitetura do driver e componentes internos](mongodb.architecture.md) — Explica a arquitetura do driver e recursos especiais
  - [Arquitetura](mongodb.overview.md) — Visão geral da arquitetura
  - [Conexões](mongodb.connection-handling.md) — Manipulação de conexão e persistência
  - [Dados Persistentes](mongodb.persistence.md) — Serialização e desserialização de variáveis PHP no MongoDB
- [Segurança](mongodb.security.md)
  - [Ataques de Injeção de Requisição](mongodb.security.request_injection.md)
  - [Ataques de injeção de script](mongodb.security.script_injection.md)
- [MongoDB\Driver](mongodb.mongodb.md) — Classes da Extensão MongoDB
  - [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) — A classe MongoDB\Driver\Manager
  - [MongoDB\Driver\Command](class.mongodb-driver-command.md) — A classe MongoDB\Driver\Command
  - [MongoDB\Driver\Query](class.mongodb-driver-query.md) — A classe MongoDB\Driver\Query
  - [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) — A classe MongoDB\Driver\BulkWrite
  - [MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md) — A classe MongoDB\Driver\BulkWriteCommand
  - [MongoDB\Driver\Session](class.mongodb-driver-session.md) — A classe MongoDB\Driver\Session
  - [MongoDB\Driver\ClientEncryption](class.mongodb-driver-clientencryption.md) — A classe MongoDB\Driver\ClientEncryption
  - [MongoDB\Driver\ServerApi](class.mongodb-driver-serverapi.md) — A classe MongoDB\Driver\ServerApi
  - [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) — A classe MongoDB\Driver\WriteConcern
  - [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) — A classe MongoDB\Driver\ReadPreference
  - [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md) — A classe MongoDB\Driver\ReadConcern
  - [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) — A classe MongoDB\Driver\Cursor
  - [MongoDB\Driver\CursorId](class.mongodb-driver-cursorid.md) — A classe MongoDB\Driver\CursorId
  - [MongoDB\Driver\CursorInterface](class.mongodb-driver-cursorinterface.md) — A interface MongoDB\Driver\CursorInterface
  - [MongoDB\Driver\Server](class.mongodb-driver-server.md) — A classe MongoDB\Driver\Server
  - [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md) — A classe MongoDB\Driver\ServerDescription
  - [MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md) — A classe MongoDB\Driver\TopologyDescription
  - [MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md) — A classe MongoDB\Driver\WriteConcernError
  - [MongoDB\Driver\WriteError](class.mongodb-driver-writeerror.md) — A classe MongoDB\Driver\WriteError
  - [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md) — A classe MongoDB\Driver\WriteResult
  - [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md) — A classe MongoDB\Driver\BulkWriteCommandResult
- [MongoDB\BSON](mongodb.bson.md) — Classes e Funções BSON do MongoDB
  - [Funções](ref.bson.functions.md)
  - [MongoDB\BSON\Document](class.mongodb-bson-document.md) — A classe MongoDB\BSON\Document
  - [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md) — A classe MongoDB\BSON\PackedArray
  - [MongoDB\BSON\Iterator](class.mongodb-bson-iterator.md) — A classe MongoDB\BSON\Iterator
  - [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) — A classe MongoDB\BSON\Binary
  - [MongoDB\BSON\VectorType](enum.mongodb-bson-vectortype.md) — A enumeração MongoDB\BSON\VectorType
  - [MongoDB\BSON\Decimal128](class.mongodb-bson-decimal128.md) — A classe MongoDB\BSON\Decimal128
  - [MongoDB\BSON\Javascript](class.mongodb-bson-javascript.md) — A classe MongoDB\BSON\Javascript
  - [MongoDB\BSON\MaxKey](class.mongodb-bson-maxkey.md) — A classe MongoDB\BSON\MaxKey
  - [MongoDB\BSON\MinKey](class.mongodb-bson-minkey.md) — A classe MongoDB\BSON\MinKey
  - [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) — A classe MongoDB\BSON\ObjectId
  - [MongoDB\BSON\Regex](class.mongodb-bson-regex.md) — A classe MongoDB\BSON\Regex
  - [MongoDB\BSON\Timestamp](class.mongodb-bson-timestamp.md) — A classe MongoDB\BSON\Timestamp
  - [MongoDB\BSON\UTCDateTime](class.mongodb-bson-utcdatetime.md) — A classe MongoDB\BSON\UTCDateTime
  - [MongoDB\BSON\Type](class.mongodb-bson-type.md) — A interface MongoDB\BSON\Type
  - [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md) — A interface MongoDB\BSON\Persistable
  - [MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md) — A interface MongoDB\BSON\Serializable
  - [MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md) — A interface MongoDB\BSON\Unserializable
  - [MongoDB\BSON\BinaryInterface](class.mongodb-bson-binaryinterface.md) — A interface MongoDB\BSON\BinaryInterface
  - [MongoDB\BSON\Decimal128Interface](class.mongodb-bson-decimal128interface.md) — A interface MongoDB\BSON\Decimal128Interface
  - [MongoDB\BSON\JavascriptInterface](class.mongodb-bson-javascriptinterface.md) — A interface MongoDB\BSON\JavascriptInterface
  - [MongoDB\BSON\MaxKeyInterface](class.mongodb-bson-maxkeyinterface.md) — A interface MongoDB\BSON\MaxKeyInterface
  - [MongoDB\BSON\MinKeyInterface](class.mongodb-bson-minkeyinterface.md) — A interface MongoDB\BSON\MinKeyInterface
  - [MongoDB\BSON\ObjectIdInterface](class.mongodb-bson-objectidinterface.md) — A interface MongoDB\BSON\ObjectIdInterface
  - [MongoDB\BSON\RegexInterface](class.mongodb-bson-regexinterface.md) — A interface MongoDB\BSON\RegexInterface
  - [MongoDB\BSON\TimestampInterface](class.mongodb-bson-timestampinterface.md) — A interface MongoDB\BSON\TimestampInterface
  - [MongoDB\BSON\UTCDateTimeInterface](class.mongodb-bson-utcdatetimeinterface.md) — A interface MongoDB\BSON\UTCDateTimeInterface
  - [MongoDB\BSON\DBPointer](class.mongodb-bson-dbpointer.md) — A classe MongoDB\BSON\DBPointer
  - [MongoDB\BSON\Int64](class.mongodb-bson-int64.md) — A classe MongoDB\BSON\Int64
  - [MongoDB\BSON\Symbol](class.mongodb-bson-symbol.md) — A classe MongoDB\BSON\Symbol
  - [MongoDB\BSON\Undefined](class.mongodb-bson-undefined.md) — A classe MongoDB\BSON\Undefined
- [MongoDB\Driver\Monitoring](mongodb.monitoring.md) — Classes de monitoramento e funções assinantes
  - [Funções](ref.monitoring.functions.md)
  - [MongoDB\Driver\Monitoring\CommandFailedEvent](class.mongodb-driver-monitoring-commandfailedevent.md) — A classe MongoDB\Driver\Monitoring\CommandFailedEvent
  - [MongoDB\Driver\Monitoring\CommandStartedEvent](class.mongodb-driver-monitoring-commandstartedevent.md) — A classe MongoDB\Driver\Monitoring\CommandStartedEvent
  - [MongoDB\Driver\Monitoring\CommandSucceededEvent](class.mongodb-driver-monitoring-commandsucceededevent.md) — A classe MongoDB\Driver\Monitoring\CommandSucceededEvent
  - [MongoDB\Driver\Monitoring\ServerChangedEvent](class.mongodb-driver-monitoring-serverchangedevent.md) — A classe MongoDB\Driver\Monitoring\ServerChangedEvent
  - [MongoDB\Driver\Monitoring\ServerClosedEvent](class.mongodb-driver-monitoring-serverclosedevent.md) — A classe MongoDB\Driver\Monitoring\ServerClosedEvent
  - [MongoDB\Driver\Monitoring\ServerOpeningEvent](class.mongodb-driver-monitoring-serveropeningevent.md) — A classe MongoDB\Driver\Monitoring\ServerOpeningEvent
  - [MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md) — A classe MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent
  - [MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent](class.mongodb-driver-monitoring-serverheartbeatstartedevent.md) — A classe MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent
  - [MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent](class.mongodb-driver-monitoring-serverheartbeatsucceededevent.md) — A classe MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent
  - [MongoDB\Driver\Monitoring\TopologyChangedEvent](class.mongodb-driver-monitoring-topologychangedevent.md) — A classe MongoDB\Driver\Monitoring\TopologyChangedEvent
  - [MongoDB\Driver\Monitoring\TopologyClosedEvent](class.mongodb-driver-monitoring-topologyclosedevent.md) — A classe MongoDB\Driver\Monitoring\TopologyClosedEvent
  - [MongoDB\Driver\Monitoring\TopologyOpeningEvent](class.mongodb-driver-monitoring-topologyopeningevent.md) — A classe MongoDB\Driver\Monitoring\TopologyOpeningEvent
  - [MongoDB\Driver\Monitoring\CommandSubscriber](class.mongodb-driver-monitoring-commandsubscriber.md) — A interface MongoDB\Driver\Monitoring\CommandSubscriber
  - [MongoDB\Driver\Monitoring\LogSubscriber](class.mongodb-driver-monitoring-logsubscriber.md) — A interface MongoDB\Driver\Monitoring\LogSubscriber
  - [MongoDB\Driver\Monitoring\SDAMSubscriber](class.mongodb-driver-monitoring-sdamsubscriber.md) — A interface MongoDB\Driver\Monitoring\SDAMSubscriber
  - [MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) — A interface MongoDB\Driver\Monitoring\Subscriber
- [MongoDB\Driver\Exception](mongodb.exceptions.md) — Classes de exceção
  - [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) — A classe MongoDB\Driver\Exception\AuthenticationException
  - [MongoDB\Driver\Exception\BulkWriteException](class.mongodb-driver-exception-bulkwriteexception.md) — A classe MongoDB\Driver\Exception\BulkWriteException
  - [MongoDB\Driver\Exception\BulkWriteCommandException](class.mongodb-driver-exception-bulkwritecommandexception.md) — A classe MongoDB\Driver\Exception\BulkWriteCommandException
  - [MongoDB\Driver\Exception\CommandException](class.mongodb-driver-exception-commandexception.md) — A classe MongoDB\Driver\Exception\CommandException
  - [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) — A classe MongoDB\Driver\Exception\ConnectionException
  - [MongoDB\Driver\Exception\ConnectionTimeoutException](class.mongodb-driver-exception-connectiontimeoutexception.md) — A classe MongoDB\Driver\Exception\ConnectionTimeoutException
  - [MongoDB\Driver\Exception\EncryptionException](class.mongodb-driver-exception-encryptionexception.md) — A classe MongoDB\Driver\Exception\EncryptionException
  - [MongoDB\Driver\Exception\Exception](class.mongodb-driver-exception-exception.md) — A interface MongoDB\Driver\Exception\Exception
  - [MongoDB\Driver\Exception\ExecutionTimeoutException](class.mongodb-driver-exception-executiontimeoutexception.md) — A classe MongoDB\Driver\Exception\ExecutionTimeoutException
  - [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) — A classe MongoDB\Driver\Exception\InvalidArgumentException
  - [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) — A classe MongoDB\Driver\Exception\LogicException
  - [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) — A classe MongoDB\Driver\Exception\RuntimeException
  - [MongoDB\Driver\Exception\ServerException](class.mongodb-driver-exception-serverexception.md) — A classe MongoDB\Driver\Exception\ServerException
  - [MongoDB\Driver\Exception\SSLConnectionException](class.mongodb-driver-exception-sslconnectionexception.md) — A classe MongoDB\Driver\Exception\SSLConnectionException
  - [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) — A classe MongoDB\Driver\Exception\UnexpectedValueException
  - [MongoDB\Driver\Exception\WriteException](class.mongodb-driver-exception-writeexception.md) — A classe MongoDB\Driver\Exception\WriteException
  - [Árvore de Classes](mongodb.exceptions.tree.md) — Árvore de Classes de Exceção do MongoDB

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
