# Conta o número de operações de escrita em massa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwrite.count.php

---

# MongoDB\Driver\BulkWrite::count

(mongodb >=1.0.0)

MongoDB\Driver\BulkWrite::count — Conta o número de operações de escrita em massa

### Descrição

public function **MongoDB\Driver\BulkWrite::count**(): [int](language.types.integer.md)

Retorna o número de operações de escrita adicionadas
ao objeto [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de operações de escrita adicionadas
ao objeto [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.2.0 | Retorna o número de operações de escrita adicionadas ao objeto [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md). Versões anteriores retornavam o número esperado de viagens de ida e volta de cliente para servidor necessárias para executar todas as operações de escrita. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWrite::count()****

```
<?php

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['_id' => 1, 'x' => 1]);
$bulk->insert(['_id' => 2, 'x' => 2]);
$bulk->update(['x' => 2], ['$set' => ['x' => 1]]);
$bulk->delete(['x' => 1]);

var_dump(count($bulk));

?>
```

O exemplo acima produzirá:

```
int(4)
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
