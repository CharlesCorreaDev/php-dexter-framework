# Adiciona uma operação replaceOne

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommand.replaceone.php

---

# MongoDB\Driver\BulkWriteCommand::replaceOne

(mongodb >=2.1.0)

MongoDB\Driver\BulkWriteCommand::replaceOne — Adiciona uma operação replaceOne

### Descrição

public function **MongoDB\Driver\BulkWriteCommand::replaceOne**(  
    [string](language.types.string.md) `$namespace`,  
    [array](language.types.array.md)|[object](language.types.object.md) `$filter`,  
    [array](language.types.array.md)|[object](language.types.object.md) `$replacement`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): [void](language.types.void.md)

Adiciona uma operação replaceOne ao
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md). O primeiro documento
correspondente a `filter` na coleção identificada por
`namespace` será substituído.

### Parâmetros

`namespace` ([string](language.types.string.md))
:   Um namespace totalmente qualificado (por exemplo, `"nomeDoBancoDados.nomeDaColecao"`).

`filter` ([array](language.types.array.md)|[object](language.types.object.md))
:   O [» predicado de consulta](https://www.mongodb.com/docs/manual/tutorial/query-documents/).
    Um predicado vazio corresponderá a todos os documentos da coleção.

    > **Nota**:
    >
    > Ao avaliar os critérios de consulta, o MongoDB compara os tipos e valores de acordo com suas próprias [» regras de comparação para tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-type-comparison-order/), que diferem das regras de [comparação](types.comparisons.md) e do [malabarismo de tipos](language.types.type-juggling.md) do PHP. Ao corresponder a um tipo especial de BSON, os critérios de consulta devem usar a respectiva [classe BSON](mongodb.bson.md) (por exemplo, use [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) para corresponder a um [» ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid)).

`replacement` ([array](language.types.array.md)|[object](language.types.object.md))
:   Um documento de substituição.

`options`
:   **Opções**

    | Opção | Tipo | Descrição | Padrão |
    | --- | --- | --- | --- |
    | collation | [array](language.types.array.md)|[object](language.types.object.md) | [» Collation](https://www.mongodb.com/docs/upcoming/reference/collation/) permite que os usuários especifiquem regras específicas do idioma para comparação de strings, como regras para maiúsculas e minúsculas e acentos. Ao especificar a collation, o campo `"locale"` é obrigatório; todos os outros campos de collation são opcionais. Para obter descrições dos campos, veja o [» Documento de Collation](https://www.mongodb.com/docs/upcoming/reference/collation/#collation-document).  Se a collation não for especificada, mas a coleção tiver uma collation padrão, a operação usará a collation especificada para a coleção. Se nenhuma collation for especificada para a coleção ou para a operação, o MongoDB usará a comparação binária simples usada em versões anteriores para comparações de strings.  Esta opção está disponível no MongoDB 3.4+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
    | hint | [string](language.types.string.md)|[array](language.types.array.md)|[object](language.types.object.md) | Especificação de índice. Especifique o nome do índice como uma string ou o padrão de chave do índice. Se especificado, o sistema de consulta considerará apenas planos que utilizem o índice sugerido. |
    | sort | [array](language.types.array.md)|[object](language.types.object.md) | Especifica qual documento a operação substitui se a consulta corresponder a vários documentos. O primeiro documento correspondido pela ordem de classificação será substituído. |
    | upsert | [bool](language.types.boolean.md) | Se `filter` não corresponder a um documento existente, insira um *único* documento. O documento será criado a partir de `replacement`. | **`false`** |

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWriteCommand::replaceOne()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand;
$bulk->replaceOne('db.coll', ['x' => 1], ['x' => 1, 'y' => 2]);

$result = $manager->executeBulkWriteCommand($bulk);

?>
```

### Veja também

- [MongoDB\Driver\BulkWriteCommand::updateOne()](mongodb-driver-bulkwritecommand.updateone.md) - Adiciona uma operação updateOne
- [MongoDB\Driver\BulkWriteCommand::updateMany()](mongodb-driver-bulkwritecommand.updatemany.md) - Adiciona uma operação updateMany
- [MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md) - Executa operações de gravação usando o comando bulkWrite
- [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)

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
