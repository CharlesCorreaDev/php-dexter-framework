# Adiciona uma operação de atualização ao objeto de escrita em massa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwrite.update.php

---

# MongoDB\Driver\BulkWrite::update

(mongodb >=1.0.0)

MongoDB\Driver\BulkWrite::update — Adiciona uma operação de atualização ao objeto de escrita em massa

### Descrição

public function **MongoDB\Driver\BulkWrite::update**([array](language.types.array.md)|[object](language.types.object.md) `$filter`, [array](language.types.array.md)|[object](language.types.object.md) `$newObj`, [?](language.types.null.md)[array](language.types.array.md) `$updateOptions` = **`null`**): [void](language.types.void.md)

Adiciona uma operação de atualização ao
[MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md).

### Parâmetros

`filter` ([array](language.types.array.md)|[object](language.types.object.md))
:   O [» predicado de consulta](https://www.mongodb.com/docs/manual/tutorial/query-documents/).
    Um predicado vazio corresponderá a todos os documentos da coleção.

    > **Nota**:
    >
    > Ao avaliar os critérios de consulta, o MongoDB compara os tipos e valores de acordo com suas próprias [» regras de comparação para tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-type-comparison-order/), que diferem das regras de [comparação](types.comparisons.md) e do [malabarismo de tipos](language.types.type-juggling.md) do PHP. Ao corresponder a um tipo especial de BSON, os critérios de consulta devem usar a respectiva [classe BSON](mongodb.bson.md) (por exemplo, use [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) para corresponder a um [» ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid)).

`newObj` ([array](language.types.array.md)|[object](language.types.object.md))
:   Um documento contendo operadores de atualização (ex.:
    `$set`), um documento para substituição (ou seja,
    *somente* expressões `campo:valor`), ou
    um [» pipeline de agregação](https://www.mongodb.com/docs/manual/reference/command/update/#update-with-an-aggregation-pipeline).

`updateOptions`
:   **updateOptions**

    | Opção | Tipo | Descrição | Padrão |
    | --- | --- | --- | --- |
    | arrayFilters | [array](language.types.array.md) | Um array de documentos de filtro que determina quais elementos do array serão modificados para uma operação de atualização em um campo do array. Consulte [» Especificar arrayFilters para operações de atualização de array](https://www.mongodb.com/docs/manual/reference/command/update/#update-command-arrayfilters) no manual do MongoDB para obter mais informações.  Esta opção está disponível no MongoDB 3.6+ e resultará em uma exceção em tempo de execução se especificada para uma versão mais antiga do servidor. |
    | collation | [array](language.types.array.md)|[object](language.types.object.md) | [» Collation](https://www.mongodb.com/docs/upcoming/reference/collation/) permite que os usuários especifiquem regras específicas do idioma para comparação de strings, como regras para maiúsculas e minúsculas e acentos. Ao especificar a collation, o campo `"locale"` é obrigatório; todos os outros campos de collation são opcionais. Para obter descrições dos campos, veja o [» Documento de Collation](https://www.mongodb.com/docs/upcoming/reference/collation/#collation-document).  Se a collation não for especificada, mas a coleção tiver uma collation padrão, a operação usará a collation especificada para a coleção. Se nenhuma collation for especificada para a coleção ou para a operação, o MongoDB usará a comparação binária simples usada em versões anteriores para comparações de strings.  Esta opção está disponível no MongoDB 3.4+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
    | hint | [string](language.types.string.md)|[array](language.types.array.md)|[object](language.types.object.md) | Especificação do índice. Especifique o nome do índice como uma string ou o padrão de chave do índice. Se especificado, o sistema de consulta considerará apenas os planos usando o índice sugerido.  Esta opção está disponível no MongoDB 4.2+ e resultará em uma exceção em tempo de execução se especificada para uma versão mais antiga do servidor. |
    | multi | [bool](language.types.boolean.md) | Atualiza apenas o primeiro documento correspondente se for igual a **`false`**, ou todos os documentos correspondentes se for igual a **`true`**. Esta opção não pode ser **`true`** se `newObj` for um documento de substituição. | **`false`** |
    | sort | [array](language.types.array.md)|[object](language.types.object.md) | Especifica que documento a operação atualiza se a consulta corresponder a múltiplos documentos. O primeiro documento correspondente à ordenação será atualizado.  Esta opção não pode ser usada se `"multi"` for **`true`**.  Esta opção está disponível no MongoDB 8.0+ e resultará em uma exceção no momento da execução se especificada para uma versão antiga do servidor. |
    | upsert | [bool](language.types.boolean.md) | Se o parâmetro `filter` não corresponder a um documento existente, insere um *único* documento. O documento será criado a partir de `newObj` se for um documento de substituição (ou seja, sem operadores de atualização); caso contrário, os operadores em `newObj` serão aplicados a `filter` para criar o novo documento. | **`false`** |

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.21.0 | Adicionada a opção `"sort"`. |
| PECL mongodb 1.7.0 | Opção `"hint"` adicionada. |
| PECL mongodb 1.6.0 | O parâmetro `newObj` agora aceita um pipeline de agregação. Este recurso requer MongoDB 4.2+ e resultará em uma exceção em tempo de execução se especificado para uma versão de servidor mais antiga. |
| PECL mongodb 1.5.0 | Usar a opção `"arrayFilters"` resultará em uma exceção em tempo de execução se não for suportada pelo servidor. Anteriormente, nenhuma exceção seria lançada e a opção poderia ser ignorada. |
| PECL mongodb 1.4.0 | Opção `"arrayFilters"` adicionada. |
| PECL mongodb 1.2.0 | Opção `"collation"` adicionada. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWrite::update()****

```
<?php

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->update(
    ['x' => 2],
    ['$set' => ['y' => 3]],
    ['multi' => false, 'upsert' => false]
);

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
