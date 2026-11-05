# Retorna os servidores aos quais este gerenciador está conectado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.getservers.php

---

# MongoDB\Driver\Manager::getServers

(mongodb >=1.0.0)

MongoDB\Driver\Manager::getServers — Retorna os servidores aos quais este gerenciador está conectado

### Descrição

final public function **MongoDB\Driver\Manager::getServers**(): [array](language.types.array.md)

Retorna um [array](language.types.array.md) de instâncias [MongoDB\Driver\Server](class.mongodb-driver-server.md)
às quais este gerenciador está conectado.

> **Nota**:
>
> Como o driver se conecta ao banco de dados lentamente, este método pode retornar um
> [array](language.types.array.md) vazio se for chamado antes de executar uma operação no
> [MongoDB\Driver\Manager](class.mongodb-driver-manager.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) de instâncias [MongoDB\Driver\Server](class.mongodb-driver-server.md)
às quais este gerenciador está conectado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Manager::getServers()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

/* O driver se conecta ao servidor de banco de dados lentamente, então Manager::getServers()
 * pode retornar inicialmente um array vazio. */
var_dump($manager->getServers());

$command = new MongoDB\Driver\Command(['ping' => 1]);
$manager->executeCommand('db', $command);

var_dump($manager->getServers());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(0) {
}
array(1) {
  [0]=>
  object(MongoDB\Driver\Server)#3 (10) {
    ["host"]=>
    string(9) "localhost"
    ["port"]=>
    int(27017)
    ["type"]=>
    int(1)
    ["is_primary"]=>
    bool(false)
    ["is_secondary"]=>
    bool(false)
    ["is_arbiter"]=>
    bool(false)
    ["is_hidden"]=>
    bool(false)
    ["is_passive"]=>
    bool(false)
    ["last_hello_response"]=>
    array(8) {
      ["isWritablePrimary"]=>
      bool(true)
      ["maxBsonObjectSize"]=>
      int(16777216)
      ["maxMessageSizeBytes"]=>
      int(48000000)
      ["maxWriteBatchSize"]=>
      int(1000)
      ["localTime"]=>
      object(MongoDB\BSON\UTCDateTime)#4 (1) {
        ["milliseconds"]=>
        int(1447267964517)
      }
      ["maxWireVersion"]=>
      int(3)
      ["minWireVersion"]=>
      int(0)
      ["ok"]=>
      float(1)
    }
    ["round_trip_time"]=>
    int(554)
  }
}
```

### Veja também

- [MongoDB\Driver\Server](class.mongodb-driver-server.md)
- [MongoDB\Driver\Manager::selectServer()](mongodb-driver-manager.selectserver.md) - Seleciona um servidor que corresponde a uma preferência de leitura

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
