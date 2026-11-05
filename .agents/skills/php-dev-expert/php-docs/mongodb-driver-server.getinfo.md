# Retorna um array de informações que descrevem este servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.getinfo.php

---

# MongoDB\Driver\Server::getInfo

(mongodb >=1.0.0)

MongoDB\Driver\Server::getInfo — Retorna um array de informações que descrevem este servidor

### Descrição

final public function **MongoDB\Driver\Server::getInfo**(): [array](language.types.array.md)

Retorna um array de informações que descrevem o servidor. Esse array é derivado
da resposta do comando
[» hello](https://www.mongodb.com/docs/manual/reference/command/hello/) mais recente
obtida por meio de
[» monitoramento do servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md).

> **Nota**:
>
> Quando o driver estiver conectado a um balanceador de carga, esse método retornará
> a resposta do comando
> [» hello](https://www.mongodb.com/docs/manual/reference/command/hello/)
> enviada pelo servidor de apoio no handshake de conexão inicial. Isso contrasta
> com outros métodos (por exemplo, [MongoDB\Driver\Server::getType()](mongodb-driver-server.gettype.md)),
> que retornarão informações sobre o próprio balanceador de carga.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de informações que descrevem este servidor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Server::getInfo()****

```
<?php

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017/');

$rp = new MongoDB\Driver\ReadPreference('primary');
$server = $manager->selectServer($rp);

var_dump($server->getInfo());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(23) {
  ["helloOk"]=>
  bool(true)
  ["topologyVersion"]=>
  array(2) {
    ["processId"]=>
    object(MongoDB\BSON\ObjectId)#4 (1) {
      ["oid"]=>
      string(24) "617b6d696a3a89d2f77e6df0"
    }
    ["counter"]=>
    int(6)
  }
  ["hosts"]=>
  array(1) {
    [0]=>
    string(15) "localhost:27017"
  }
  ["setName"]=>
  string(3) "rs0"
  ["setVersion"]=>
  int(1)
  ["ismaster"]=>
  bool(true)
  ["secondary"]=>
  bool(false)
  ["primary"]=>
  string(15) "localhost:27017"
  ["me"]=>
  string(15) "localhost:27017"
  ["electionId"]=>
  object(MongoDB\BSON\ObjectId)#5 (1) {
    ["oid"]=>
    string(24) "7fffffff0000000000000001"
  }
  ["lastWrite"]=>
  array(4) {
    ["opTime"]=>
    array(2) {
      ["ts"]=>
      object(MongoDB\BSON\Timestamp)#6 (2) {
        ["increment"]=>
        string(1) "1"
        ["timestamp"]=>
        string(10) "1635478989"
      }
      ["t"]=>
      int(1)
    }
    ["lastWriteDate"]=>
    object(MongoDB\BSON\UTCDateTime)#7 (1) {
      ["milliseconds"]=>
      string(13) "1635478989000"
    }
    ["majorityOpTime"]=>
    array(2) {
      ["ts"]=>
      object(MongoDB\BSON\Timestamp)#8 (2) {
        ["increment"]=>
        string(1) "1"
        ["timestamp"]=>
        string(10) "1635478989"
      }
      ["t"]=>
      int(1)
    }
    ["majorityWriteDate"]=>
    object(MongoDB\BSON\UTCDateTime)#9 (1) {
      ["milliseconds"]=>
      string(13) "1635478989000"
    }
  }
  ["maxBsonObjectSize"]=>
  int(16777216)
  ["maxMessageSizeBytes"]=>
  int(48000000)
  ["maxWriteBatchSize"]=>
  int(100000)
  ["localTime"]=>
  object(MongoDB\BSON\UTCDateTime)#10 (1) {
    ["milliseconds"]=>
    string(13) "1635478992136"
  }
  ["logicalSessionTimeoutMinutes"]=>
  int(30)
  ["connectionId"]=>
  int(3)
  ["minWireVersion"]=>
  int(0)
  ["maxWireVersion"]=>
  int(13)
  ["readOnly"]=>
  bool(false)
  ["ok"]=>
  float(1)
  ["$clusterTime"]=>
  array(2) {
    ["clusterTime"]=>
    object(MongoDB\BSON\Timestamp)#11 (2) {
      ["increment"]=>
      string(1) "1"
      ["timestamp"]=>
      string(10) "1635478989"
    }
    ["signature"]=>
    array(2) {
      ["hash"]=>
      object(MongoDB\BSON\Binary)#12 (2) {
        ["data"]=>
        string(20) ""
        ["type"]=>
        int(0)
      }
      ["keyId"]=>
      int(0)
    }
  }
  ["operationTime"]=>
  object(MongoDB\BSON\Timestamp)#13 (2) {
    ["increment"]=>
    string(1) "1"
    ["timestamp"]=>
    string(10) "1635478989"
  }
}
```

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.11.0 | Quando o driver está conectado a um balanceador de carga, esse método retorna a resposta do comando `hello` enviada pelo servidor de apoio no handshake de conexão inicial. |

### Veja também

- [MongoDB\Driver\ServerDescription::getHelloResponse()](mongodb-driver-serverdescription.gethelloresponse.md) - Retorna a resposta "hello" mais recente do servidor
- Comando [» hello](https://www.mongodb.com/docs/manual/reference/command/hello/) no manual do MongoDB
- [» Especificação de descoberta e monitoramento de servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md)

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
