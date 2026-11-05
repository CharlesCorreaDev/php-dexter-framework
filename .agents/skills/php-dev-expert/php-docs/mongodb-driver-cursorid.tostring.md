# Representação string do ID de cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursorid.tostring.php

---

# MongoDB\Driver\CursorId::\_\_toString

(mongodb >=1.0.0)

MongoDB\Driver\CursorId::\_\_toString — Representação string do ID de cursor

### Descrição

final public function **MongoDB\Driver\CursorId::\_\_toString**(): [string](language.types.string.md)

Retorna a representação em [string](language.types.string.md) do ID de cursor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em [string](language.types.string.md) do ID de cursor.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\CursorId::\_\_toString()****

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
var_dump((string) $cursor->getId());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(11) "98061641158"
```

### Veja também

- [MongoDB\Driver\Cursor::getId()](mongodb-driver-cursor.getid.md) - Retorna o ID para este cursor

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
