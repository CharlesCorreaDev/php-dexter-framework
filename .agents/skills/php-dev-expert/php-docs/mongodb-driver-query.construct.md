# Constrói uma nova consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-query.construct.php

---

# MongoDB\Driver\Query::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\Query::\_\_construct — Constrói uma nova consulta

### Descrição

final public function **MongoDB\Driver\Query::\_\_construct**([array](language.types.array.md)|[object](language.types.object.md) `$filter`, [?](language.types.null.md)[array](language.types.array.md) `$queryOptions` = **`null`**)

Constrói um novo [MongoDB\Driver\Query](class.mongodb-driver-query.md), que é um
objeto de valor imutável que representa uma consulta ao banco de dados. A consulta pode então
ser executada com
[MongoDB\Driver\Manager::executeQuery()](mongodb-driver-manager.executequery.md).

### Parâmetros

`filter` ([array](language.types.array.md)|[object](language.types.object.md))
:   O [» predicado de consulta](https://www.mongodb.com/docs/manual/tutorial/query-documents/).
    Um predicado vazio corresponderá a todos os documentos da coleção.

    > **Nota**:
    >
    > Ao avaliar os critérios de consulta, o MongoDB compara os tipos e valores de acordo com suas próprias [» regras de comparação para tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-type-comparison-order/), que diferem das regras de [comparação](types.comparisons.md) e do [malabarismo de tipos](language.types.type-juggling.md) do PHP. Ao corresponder a um tipo especial de BSON, os critérios de consulta devem usar a respectiva [classe BSON](mongodb.bson.md) (por exemplo, use [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) para corresponder a um [» ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid)).

`queryOptions`
:   **queryOptions**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | allowDiskUse | [bool](language.types.boolean.md) | Permite que o MongoDB use arquivos de disco temporários para armazenar dados que excedem o limite de memória do sistema de 100 megabytes durante o processamento de uma operação bloqueante de classificação. |
    | allowPartialResults | [bool](language.types.boolean.md) | Para consultas em uma coleção de fragmentos, retorna resultados parciais do "mongos" se alguns fragmentos não estiverem disponíveis, em vez de lançar um erro.  Se não especificada, a opção obsoleta `"partial"` será usada. |
    | awaitData | [bool](language.types.boolean.md) | Use em conjunto com a opção `"tailable"` para bloquear temporariamente uma operação getMore no cursor se estiver no final dos dados, em vez de não retornar nenhum dado. Após um período de tempo limite, a consulta retorna normalmente. |
    | batchSize | [int](language.types.integer.md) | O número de documentos a serem devolvidos no primeiro lote. O padrão é 101. Um tamanho de lote 0 significa que o cursor será estabelecido, mas nenhum documento será retornado no primeiro lote.  Nas versões do MongoDB anteriores à 3.2, onde as consultas usam o protocolo de ligação legado OP\_QUERY, um tamanho de lote de 1 fechará o cursor, independentemente do número de documentos correspondidos. |
    | collation | [array](language.types.array.md)|[object](language.types.object.md) | [» Collation](https://www.mongodb.com/docs/upcoming/reference/collation/) permite que os usuários especifiquem regras específicas do idioma para comparação de strings, como regras para maiúsculas e minúsculas e acentos. Ao especificar a collation, o campo `"locale"` é obrigatório; todos os outros campos de collation são opcionais. Para obter descrições dos campos, veja o [» Documento de Collation](https://www.mongodb.com/docs/upcoming/reference/collation/#collation-document).  Se a collation não for especificada, mas a coleção tiver uma collation padrão, a operação usará a collation especificada para a coleção. Se nenhuma collation for especificada para a coleção ou para a operação, o MongoDB usará a comparação binária simples usada em versões anteriores para comparações de strings.  Esta opção está disponível no MongoDB 3.4+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
    | comment | [mixed](language.types.mixed.md) | Um comentário arbitrário para ajudar a rastrear a operação por meio do perfilador do banco de dados, da saída currentOp e dos logs.  O comentário pode ser qualquer tipo BSON válido para MongoDB 4.4+. Versões anteriores do servidor suportam apenas valores de string.  Se não especificada, o modificador obsoleto `"$comment"` será utilizado. |
    | exhaust | [bool](language.types.boolean.md) | Transmite os dados a todo vapor em vários pacotes "more", supondo que o cliente lerá completamente todos os dados consultados. Mais rápido quando se está extraindo muitos dados e sabe-se que a intenção é extrair tudo. Nota: o cliente não tem permissão para não ler todos os dados, a menos que feche a conexão.  Esta opção não é suportada pelo comando "find" no MongoDB 3.2+ e forçará o driver a usar a versão herdada do protocolo de ligação (ou seja, OP\_QUERY). |
    | explain | [bool](language.types.boolean.md) | Se **`true`**, o [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) retornado conterá um único documento que descreve o processo e os índices usados ​​para retornar a consulta.  Se não especificada, o modificador obsoleto `"$explain"` será utilizado.  Esta opção não é suportada pelo comando "find" no MongoDB 3.2+ e só será respeitada ao usar a versão herdada do protocolo wire (ou seja, OP\_QUERY). O comando [» explain](https://www.mongodb.com/docs/manual/reference/command/explain/) deve ser usado no MongoDB 3.0+. |
    | hint | [string](language.types.string.md)|[array](language.types.array.md)|[object](language.types.object.md) | Especificação do índice. Especifique o nome do índice como uma string ou o padrão de chave do índice. Se especificado, o sistema de consulta considerará apenas os planos usando o índice sugerido.  Se não especificada, a opção obsoleta `"hint"` será utilizada. |
    | let | [array](language.types.array.md)|[object](language.types.object.md) | Mapa de nomes e valores de parâmetros. Os valores devem ser expressões constantes ou fechadas que não fazem referência a campos do documento. Os parâmetros podem então ser acessados como variáveis em um contexto de expressão agregada (por exemplo, `$$var`).  Esta opção está disponível no MongoDB 5.0+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
    | limit | [int](language.types.integer.md) | O número máximo de documentos a serem devolvidos. Se não for especificado, o padrão será sem limite. Um limite de 0 é equivalente a não definir limite. |
    | max | [array](language.types.array.md)|[object](language.types.object.md) | O limite superior *exclusivo* para um índice específico.  Se não especificada, o modificador obsoleto `"$max"` será utilizado. |
    | maxAwaitTimeMS | [int](language.types.integer.md) | Inteiro positivo que indica o limite de tempo em milissegundos para o servidor bloquear uma operação "getMore" se nenhum dado estiver disponível. Esta opção só deve ser usada em conjunto com as opções `"tailable"` e `"awaitData"`. |
    | maxTimeMS | [int](language.types.integer.md) | O limite de tempo cumulativo em milissegundos para operações de processamento no cursor. O MongoDB aborta a operação o mais cedo possível após o ponto de interrupção.  Se não especificada, o modificador obsoleto `"$maxTimeMS"` será utilizado. |
    | min | [array](language.types.array.md)|[object](language.types.object.md) | O limite inferior (*inclusive*) para um índice específico.  Se não especificada, o modificador obsoleto `"$min"` será utilizado. |
    | noCursorTimeout | [bool](language.types.boolean.md) | Impede que o servidor expire os cursores ociosos após um período de inatividade (10 minutos). |
    | projection | [array](language.types.array.md)|[object](language.types.object.md) | A [» especificação de projeção](https://www.mongodb.com/docs/manual/tutorial/project-fields-from-query-results/) para determinar quais campos devem ser incluídos nos documentos retornados.  Se a [funcionalidade ODM](mongodb.persistence.md#mongodb.persistence.deserialization) estiver sendo usada para desserializar documentos como sua classe PHP original, deve-se incluir o campo \_\_pclass na projeção. Isso é necessário para que a desserialização funcione e, sem ela, a extensão retornará (por padrão) um objeto [stdClass](class.stdclass.md) no lugar. |
    | readConcern | [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md) | Uma preocupação de leitura a ser aplicada à operação. Por padrão, a preocupação de leitura do [URI de conexão do MongoDB](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri) será usada.  Esta opção está disponível no MongoDB 3.2+ e resultará em uma exceção no momento da execução se especificada para uma versão mais antiga do servidor. |
    | returnKey | [bool](language.types.boolean.md) | Se **`true`**, retornará apenas as chaves de índice nos documentos resultantes. O valor padrão é **`false`**. Se **`true`** e o comando "find" não usar um índice, os documentos retornados estarão vazios.  Se não especificada, o modificador obsoleto `"$returnKey"` será utilizado. |
    | showRecordId | [bool](language.types.boolean.md) | Determina se o identificador de registro para cada documento deve ser retornado. Se **`true`**, adiciona um campo `"$recordId"` de nível superior aos documentos retornados.  Se não especificada, o modificador obsoleto `"$showDiskLoc"` será utilizado. |
    | singleBatch | [bool](language.types.boolean.md) | Determina se o cursor deve ser fechado após o primeiro lote. O padrão é **`false`**. |
    | skip | [int](language.types.integer.md) | Número de documentos a serem ignorados. O padrão é 0. |
    | sort | [array](language.types.array.md)|[object](language.types.object.md) | A especificação de classificação para a ordenação dos resultados.  Se não especificada, o modificador obsoleto `"$orderby"` será utilizado. |
    | tailable | [bool](language.types.boolean.md) | Retorna um cursor adaptável para uma coleção limitada. |

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | A opção `"partial"` foi removida. Em vez disso, use a opção `"allowPartialResults"`.  A opção `"maxScan"` foi removida. O suporte para esta opção foi removido no MongoDB 4.2.  A opção `"modifiers"` foi removida. Esta opção era usada para modificadores de consulta legados, que estão todos descontinuados.  A opção `"oplogReplay"` foi removida. Ela é ignorada no MongoDB 4.4 e versões mais recentes.  A opção `"snapshot"` foi removida. O suporte para esta opção foi removido no MongoDB 4.0.  Um valor negativo para a opção `"limit"` não implica mais em **`true`** para a opção `"singleBatch"`. Para receber apenas um único lote de resultados, combine um valor positivo `"limit"` com a opção `"singleBatch"`. |
| PECL mongodb 1.14.0 | Adicionada a opção `"let"` A opção `"comment"` agora aceita qualquer tipo. |
| PECL mongodb 1.8.0 | Adicionada a opção `"allowDiskUse"`.  A opção `"oplogReplay"` tornou-se obsoleta. |
| PECL mongodb 1.5.0 | As opções `"maxScan"` e `"snapshot"` tornaram-se obsoletas. |
| PECL mongodb 1.3.0 | Adicionada a opção `"maxAwaitTimeMS"`. |
| PECL mongodb 1.2.0 | Adicionadas as opções `"allowPartialResults"`, `"collation"`, `"comment"`, `"hint"`, `"max"`, `"maxScan"`, `"maxTimeMS"`, `"min"`, `"returnKey"`, `"showRecordId"` e `"snapshot"`.  A opção `"partial"` foi renomeada para `"allowPartialResults"`. Para compatibilidade com versões anteriores, `"partial"` ainda será lida se `"allowPartialResults"` não for especificada.  Removida a opção legada `"secondaryOk"`, que está obsoleta. Para consultas usando o protocolo de conexão legado OP\_QUERY, o driver definirá o bit `secondaryOk` conforme necessário, de acordo com a [» Especificação de Seleção de Servidor](https://github.com/mongodb/specifications/blob/master/source/server-selection/server-selection.md). |
| PECL mongodb 1.1.0 | Adicionada a opção `"readConcern"`. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Query::\_\_construct()****

```
<?php
/* Seleciona apenas os documentos de autoria de "bjori" com pelo menos 100 visualizações */
$filter = [
    'author' => 'bjori',
    'views' => [
        '$gte' => 100,
    ],
];

$options = [
    /* Retorna somente os campos a seguir nos documentos correspondentes */
    'projection' => [
        'title' => 1,
        'article' => 1,
    ],
    /* Retorna os documentos na ordem descendente de visualizações */
    'sort' => [
        'views' => -1
    ],
];

$query = new MongoDB\Driver\Query($filter, $options);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$readPreference = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::PRIMARY);
$cursor = $manager->executeQuery('databaseName.collectionName', $query, ['readPreference' => $readPreference]);

foreach($cursor as $document) {
    var_dump($document);
}

?>
```

### Veja também

- [MongoDB\Driver\Manager::executeQuery()](mongodb-driver-manager.executequery.md) - Executa uma consulta ao banco de dados
- [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

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
