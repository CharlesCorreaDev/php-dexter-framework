# Retorna o servidor associado a este resultado de gravação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeresult.getserver.php

---

# MongoDB\Driver\WriteResult::getServer

(mongodb >=1.0.0)

MongoDB\Driver\WriteResult::getServer — Retorna o servidor associado a este resultado de gravação

### Descrição

final public function **MongoDB\Driver\WriteResult::getServer**(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) associado a este
resultado de gravação. Este é o servidor que executou o
[MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) associado a este
resultado de gravação.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteResult::getServer()****

```
<?php

$manager = new MongoDB\Driver\Manager;
$server = $manager->selectServer();

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);

$result = $server->executeBulkWrite('db.collection', $bulk);

var_dump($result->getServer() == $server);

?>
```

O exemplo acima produzirá:

```
bool(true)
```

### Veja também

- [MongoDB\Driver\Server](class.mongodb-driver-server.md)

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
