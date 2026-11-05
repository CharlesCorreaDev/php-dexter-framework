# Adiciona uma operação de inserção ao objeto de escrita em massa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwrite.insert.php

---

# MongoDB\Driver\BulkWrite::insert

(mongodb >=1.0.0)

MongoDB\Driver\BulkWrite::insert — Adiciona uma operação de inserção ao objeto de escrita em massa

### Descrição

public function **MongoDB\Driver\BulkWrite::insert**([array](language.types.array.md)|[object](language.types.object.md) `$document`): [mixed](language.types.mixed.md)

Adiciona uma operação de inserção ao
[MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md).

### Parâmetros

`document` ([array](language.types.array.md)|[object](language.types.object.md))
:   Um documento a ser inserido.

### Valor Retornado

Retorna o `_id` do documento inserido. Se o documento informado em
`document` não tinha um `_id`, o objeto
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) gerado para a inserção será
retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.3.0 | O `_id` do documento inserido é sempre retornado. Anteriormente, o método somente retornava um valor se um objeto [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) fosse gerado. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWrite::insert()****

```
<?php

$bulk = new MongoDB\Driver\BulkWrite;

$doc1 = ['x' => 1];
$doc2 = ['_id' => 'custom-id', 'x' => 2];
$doc3 = ['_id' => new MongoDB\BSON\ObjectId('0123456789abcdef01234567'), 'x' => 3];

$id1 = $bulk->insert($doc1);
$id2 = $bulk->insert($doc2);
$id3 = $bulk->insert($doc3);

var_dump($id1, $id2, $id3);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('db.collection', $bulk);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\BSON\ObjectId)#3 (1) {
  ["oid"]=>
  string(24) "67f58058d1a0aa2fd80d55d0"
}
string(9) "custom-id"
object(MongoDB\BSON\ObjectId)#4 (1) {
  ["oid"]=>
  string(24) "0123456789abcdef01234567"
}
```

### Veja também

- [MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md) - Executa uma ou mais operações de escrita
- [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)
- [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
- [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md)

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
