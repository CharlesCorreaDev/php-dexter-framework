# Retorna o índice da operação de gravação correspondente a este WriteError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeerror.getindex.php

---

# MongoDB\Driver\WriteError::getIndex

(mongodb >=1.0.0)

MongoDB\Driver\WriteError::getIndex — Retorna o índice da operação de gravação correspondente a este WriteError

### Descrição

final public function **MongoDB\Driver\WriteError::getIndex**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o índice da operação de gravação (de
[MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md))
correspondente a este WriteError.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteError::getIndex()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['_id' => 1]);
$bulk->insert(['_id' => 1]);

try {
    $manager->executeBulkWrite('db.collection', $bulk);
} catch(MongoDB\Driver\Exception\BulkWriteException $e) {
    var_dump($e->getWriteResult()->getWriteErrors()[0]->getIndex());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)
```

### Veja também

- [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md)

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
