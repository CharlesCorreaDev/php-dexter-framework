# Retorna o ID para este cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.getid.php

---

# MongoDB\Driver\Cursor::getId

(mongodb >=1.0.0)

MongoDB\Driver\Cursor::getId — Retorna o ID para este cursor

### Descrição

final public function **MongoDB\Driver\Cursor::getId**(): [MongoDB\BSON\Int64](class.mongodb-bson-int64.md)

Retorna o ID para este cursor, que identifica de forma única o cursor no
servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID para este cursor. O ID será retornado como um
objeto [MongoDB\BSON\Int64](class.mongodb-bson-int64.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | O tipo de retorno foi alterado para [MongoDB\BSON\Int64](class.mongodb-bson-int64.md). O parâmetro `asInt64` foi removido. |
| PECL mongodb 1.20.0 | O retorno de um [MongoDB\Driver\CursorId](class.mongodb-driver-cursorid.md) foi descontinuado. Adicionado o parâmetro `asInt64` para facilitar a migração para versões futuras. Se `asInt64` for **`true`**, o ID será retornado como um [MongoDB\BSON\Int64](class.mongodb-bson-int64.md). |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Cursor::getId()****

```
<?php

/* Neste exemplo, são inseridos vários documentos na coleção e especificado
 * um batchSize menor para garantir que o primeiro lote contenha apenas um subconjunto dos
 * resultados e que o cursor permaneça aberto no servidor. */
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$query = new MongoDB\Driver\Query([], ['batchSize' => 2]);

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);
$bulk->insert(['x' => 2]);
$bulk->insert(['x' => 3]);
$manager->executeBulkWrite('db.collection', $bulk);

$cursor = $manager->executeQuery('db.collection', $query);
var_dump($cursor->getId(true));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\BSON\Int64)#5 (1) {
  ["integer"]=>
  string(11) "94810124093"
}
```

### Veja também

- [MongoDB\BSON\Int64](class.mongodb-bson-int64.md)

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
