# Retorna quaisquer erros de gravação ocorridos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeresult.getwriteerrors.php

---

# MongoDB\Driver\WriteResult::getWriteErrors

(mongodb >=1.0.0)

MongoDB\Driver\WriteResult::getWriteErrors — Retorna quaisquer erros de gravação ocorridos

### Descrição

final public function **MongoDB\Driver\WriteResult::getWriteErrors**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de objetos [MongoDB\Driver\WriteError](class.mongodb-driver-writeerror.md)
para quaisquer erros de gravação encontrados durante a operação de gravação. O array
estará vazio se não tiverem ocorrido erros de gravação.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 **MongoDB\Driver\WriteResult::getWriteErrors()** com um único erro**

```
<?php

$manager = new MongoDB\Driver\Manager;

/* Por padrão, as operações de gravação em massa são executadas em série e de forma ordenada,
 * e a execução será interrompida após o primeiro erro.
 */
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['_id' => 1]);
$bulk->insert(['_id' => 2]);
$bulk->insert(['_id' => 2]);
$bulk->insert(['_id' => 3]);
$bulk->insert(['_id' => 4]);
$bulk->insert(['_id' => 4]);

try {
    $result = $manager->executeBulkWrite('db.collection', $bulk);
} catch (MongoDB\Driver\Exception\BulkWriteException $e) {
    var_dump($e->getWriteResult()->getWriteErrors());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [0]=>
  object(MongoDB\Driver\WriteError)#5 (4) {
    ["message"]=>
    string(81) "E11000 duplicate key error collection: db.collection index: _id_ dup key: { : 2 }"
    ["code"]=>
    int(11000)
    ["index"]=>
    int(2)
    ["info"]=>
    NULL
  }
}
```

**Exemplo #2 **MongoDB\Driver\WriteResult::getWriteErrors()** com múltiplos erros**

```
<?php

$manager = new MongoDB\Driver\Manager;

/* A opção "ordered" pode ser usada para permitir que operações de gravação
 * em massa continuem em execução após o primeiro erro ser encontrado.
 */
$bulk = new MongoDB\Driver\BulkWrite(['ordered' => false]);
$bulk->insert(['_id' => 1]);
$bulk->insert(['_id' => 2]);
$bulk->insert(['_id' => 2]);
$bulk->insert(['_id' => 3]);
$bulk->insert(['_id' => 4]);
$bulk->insert(['_id' => 4]);

try {
    $result = $manager->executeBulkWrite('db.collection', $bulk);
} catch (MongoDB\Driver\Exception\BulkWriteException $e) {
    var_dump($e->getWriteResult()->getWriteErrors());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  [0]=>
  object(MongoDB\Driver\WriteError)#5 (4) {
    ["message"]=>
    string(81) "E11000 duplicate key error collection: db.collection index: _id_ dup key: { : 2 }"
    ["code"]=>
    int(11000)
    ["index"]=>
    int(2)
    ["info"]=>
    NULL
  }
  [1]=>
  object(MongoDB\Driver\WriteError)#6 (4) {
    ["message"]=>
    string(81) "E11000 duplicate key error collection: db.collection index: _id_ dup key: { : 4 }"
    ["code"]=>
    int(11000)
    ["index"]=>
    int(5)
    ["info"]=>
    NULL
  }
}
```

### Veja também

- [MongoDB\Driver\WriteError](class.mongodb-driver-writeerror.md)

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
