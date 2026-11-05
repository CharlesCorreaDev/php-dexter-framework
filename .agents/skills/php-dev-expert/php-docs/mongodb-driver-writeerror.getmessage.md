# Retorna a mensagem de erro do WriteError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeerror.getmessage.php

---

# MongoDB\Driver\WriteError::getMessage

(mongodb >=1.0.0)

MongoDB\Driver\WriteError::getMessage — Retorna a mensagem de erro do WriteError

### Descrição

final public function **MongoDB\Driver\WriteError::getMessage**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a mensagem de erro do WriteError.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteError::getMessage()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['_id' => 1]);
$bulk->insert(['_id' => 1]);

try {
    $manager->executeBulkWrite('db.collection', $bulk);
} catch(MongoDB\Driver\Exception\BulkWriteException $e) {
    var_dump($e->getWriteResult()->getWriteErrors()[0]->getMessage());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(70) "E11000 duplicate key error index: db.collection.$_id_ dup key: { : 1 }"
```

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
