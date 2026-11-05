# Retorna se a gravação foi reconhecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeresult.isacknowledged.php

---

# MongoDB\Driver\WriteResult::isAcknowledged

(mongodb >=1.0.0)

MongoDB\Driver\WriteResult::isAcknowledged — Retorna se a gravação foi reconhecida

### Descrição

final public function **MongoDB\Driver\WriteResult::isAcknowledged**(): [bool](language.types.boolean.md)

Se a gravação for confirmada, outros campos de contagem estarão disponíveis no
objeto [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a gravação foi reconhecida ou **`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 **MongoDB\Driver\WriteResult::isAcknowledged()** com preocupação de gravação reconhecida**

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);

$result = $manager->executeBulkWrite('db.collection', $bulk);

var_dump($result->isAcknowledged());

?>
```

O exemplo acima produzirá:

```
bool(true)
```

**Exemplo #2 **MongoDB\Driver\WriteResult::isAcknowledged()** com preocupação de gravação não reconhecida**

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);

$writeConcern = new MongoDB\Driver\WriteConcern(0);

$result = $manager->executeBulkWrite('db.collection', $bulk, ['writeConcern' => $writeConcern]);

var_dump($result->isAcknowledged());

?>
```

O exemplo acima produzirá:

```
bool(false)
```

### Veja também

- [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
- [» Referência de Preocupação de Gravação](https://www.mongodb.com/docs/manual/reference/write-concern/)

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
