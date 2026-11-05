# Define um mapa de tipos a ser usado para desserialização BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.settypemap.php

---

# MongoDB\Driver\Cursor::setTypeMap

(mongodb >=1.0.0)

MongoDB\Driver\Cursor::setTypeMap — Define um mapa de tipos a ser usado para desserialização BSON

### Descrição

final public function **MongoDB\Driver\Cursor::setTypeMap**([array](language.types.array.md) `$typemap`): [void](language.types.void.md)

Define a [configuração do mapa
de tipos](mongodb.persistence.md#mongodb.persistence.typemaps) a ser usada ao desserializar os resultados do BSON em
valores PHP.

### Parâmetros

`typeMap` ([array](language.types.array.md))
:   [Configuração de mapeamento de tipos](mongodb.persistence.md#mongodb.persistence.typemaps).

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

Ao iterar sobre o cursor, as seguintes exceções também podem ser lançadas
devido a uma configuração incorreta do mapa de tipo:

- Lança uma
  [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se
  uma classe no mapa de tipos não puder ser instanciada ou não implementar a interface
  [MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md).

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Cursor::setTypeMap()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$bulk = new MongoDB\Driver\BulkWrite;
$id = $bulk->insert(['x' => 1]);
$manager->executeBulkWrite('db.collection', $bulk);

$query = new MongoDB\Driver\Query(['_id' => $id]);
$cursor = $manager->executeQuery('db.collection', $query);
$cursor->setTypeMap(['root' => 'array']);

foreach ($cursor as $document) {
    var_dump($document);
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["_id"]=>
  object(MongoDB\BSON\ObjectId)#6 (1) {
    ["oid"]=>
    string(24) "56424fb76118fd3267180741"
  }
  ["x"]=>
  int(1)
}
```

### Veja também

- [Dados Persistentes](mongodb.persistence.md)

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
