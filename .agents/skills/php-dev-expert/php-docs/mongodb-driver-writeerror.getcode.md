# Retorna o código de erro do WriteError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeerror.getcode.php

---

# MongoDB\Driver\WriteError::getCode

(mongodb >=1.0.0)

MongoDB\Driver\WriteError::getCode — Retorna o código de erro do WriteError

### Descrição

final public function **MongoDB\Driver\WriteError::getCode**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código de erro do WriteError.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteError::getCode()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['_id' => 1]);
$bulk->insert(['_id' => 1]);

try {
    $manager->executeBulkWrite('db.collection', $bulk);
} catch(MongoDB\Driver\Exception\BulkWriteException $e) {
    var_dump($e->getWriteResult()->getWriteErrors()[0]->getCode());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(11000)
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
