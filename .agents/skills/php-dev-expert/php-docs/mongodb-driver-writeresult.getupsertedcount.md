# Retorna o número de documentos inseridos por uma inserção de atualização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeresult.getupsertedcount.php

---

# MongoDB\Driver\WriteResult::getUpsertedCount

(mongodb >=1.0.0)

MongoDB\Driver\WriteResult::getUpsertedCount — Retorna o número de documentos inseridos por uma inserção de atualização

### Descrição

final public function **MongoDB\Driver\WriteResult::getUpsertedCount**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de documentos inseridos por uma inserção de atualização.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se a escrita não foi reconhecida.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Este método agora lança uma exceção quando chamado para uma escrita não reconhecida em vez de retornar **`null`**. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteResult::getUpsertedCount()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);
$bulk->update(['x' => 1], ['$set' => ['y' => 3]]);
$bulk->update(['x' => 2], ['$set' => ['y' => 1]], ['upsert' => true]);
$bulk->update(['x' => 3], ['$set' => ['y' => 2]], ['upsert' => true]);
$bulk->delete(['x' => 1]);

$result = $manager->executeBulkWrite('db.collection', $bulk);

var_dump($result->getUpsertedCount());

?>
```

O exemplo acima produzirá:

```
int(2)
```

### Veja também

- [MongoDB\Driver\WriteResult::getUpsertedIds()](mongodb-driver-writeresult.getupsertedids.md) - Retorna um array de identificadores para documentos inseridos por atualização
- [MongoDB\Driver\WriteResult::isAcknowledged()](mongodb-driver-writeresult.isacknowledged.md) - Retorna se a gravação foi reconhecida

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
