# Adiciona uma operação de remoção ao objeto de escrita em massa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwrite.delete.php

---

# MongoDB\Driver\BulkWrite::delete

(mongodb >=1.0.0)

MongoDB\Driver\BulkWrite::delete — Adiciona uma operação de remoção ao objeto de escrita em massa

### Descrição

public function **MongoDB\Driver\BulkWrite::delete**([array](language.types.array.md)|[object](language.types.object.md) `$filter`, [?](language.types.null.md)[array](language.types.array.md) `$deleteOptions` = **`null`**): [void](language.types.void.md)

Adiciona uma operação de remoção
ao [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md).

### Parâmetros

`filter` ([array](language.types.array.md)|[object](language.types.object.md))
:   O [» predicado de consulta](https://www.mongodb.com/docs/manual/tutorial/query-documents/).
    Um predicado vazio corresponderá a todos os documentos da coleção.

    > **Nota**:
    >
    > Ao avaliar os critérios de consulta, o MongoDB compara os tipos e valores de acordo com suas próprias [» regras de comparação para tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-type-comparison-order/), que diferem das regras de [comparação](types.comparisons.md) e do [malabarismo de tipos](language.types.type-juggling.md) do PHP. Ao corresponder a um tipo especial de BSON, os critérios de consulta devem usar a respectiva [classe BSON](mongodb.bson.md) (por exemplo, use [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) para corresponder a um [» ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid)).

`deleteOptions`
:   **deleteOptions**

    | Opção | Tipo | Descrição | Padrão |
    | --- | --- | --- | --- |
    | collation | [array](language.types.array.md)|[object](language.types.object.md) | [» Collation](https://www.mongodb.com/docs/upcoming/reference/collation/) permite que os usuários especifiquem regras específicas do idioma para comparação de strings, como regras para maiúsculas e minúsculas e acentos. Ao especificar a collation, o campo `"locale"` é obrigatório; todos os outros campos de collation são opcionais. Para obter descrições dos campos, veja o [» Documento de Collation](https://www.mongodb.com/docs/upcoming/reference/collation/#collation-document).  Se a collation não for especificada, mas a coleção tiver uma collation padrão, a operação usará a collation especificada para a coleção. Se nenhuma collation for especificada para a coleção ou para a operação, o MongoDB usará a comparação binária simples usada em versões anteriores para comparações de strings.  Esta opção está disponível no MongoDB 3.4+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
    | hint | [string](language.types.string.md)|[array](language.types.array.md)|[object](language.types.object.md) | Especificação do índice. Especifique o nome do índice como uma string ou o padrão de chave do índice. Se especificado, o sistema de consulta considerará apenas os planos usando o índice sugerido.  Esta opção está disponível no MongoDB 4.4+ e resultará em uma exceção em tempo de execução se especificada para uma versão mais antiga do servidor. |
    | limit | [bool](language.types.boolean.md) | Exclui todos os documentos correspondentes (**`false`**) ou apenas o primeiro documento correspondente (**`true`**) | **`false`** |

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.8.0 | Opção `"hint"` adicionada. |
| PECL mongodb 1.2.0 | Opção `"collation"` adicionada. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWrite::delete()****

```
<?php

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->delete(['x' => 1], ['limit' => 1]);
$bulk->delete(['x' => 2], ['limit' => 0]);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('db.collection', $bulk);

?>
```

### Veja também

- [MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md) - Executa uma ou mais operações de escrita
- [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)

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
