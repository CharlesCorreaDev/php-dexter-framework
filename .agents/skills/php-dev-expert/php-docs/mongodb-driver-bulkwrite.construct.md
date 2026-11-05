# Cria um novo BulkWrite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwrite.construct.php

---

# MongoDB\Driver\BulkWrite::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\BulkWrite::\_\_construct — Cria um novo BulkWrite

### Descrição

public function **MongoDB\Driver\BulkWrite::\_\_construct**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**)

Constrói um novo [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md), que é um
objeto mutável para o qual uma ou mais operações de escrita podem ser adicionadas. As
escritas podem então ser executadas com
[MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md).

### Parâmetros

`options` ([array](language.types.array.md))
:   **Opções**

    | Opção | Tipo | Descrição | Padrão |
    | --- | --- | --- | --- |
    | bypassDocumentValidation | [bool](language.types.boolean.md) | Se for igual a **`true`**, permite operações de inserção e atualização para contornar validação no nível de documento.  Esta opção está disponível no MongoDB 3.2+ e é ignorada em versões mais antigas do servidor, que não suportam validação no nível de documento. | **`false`** |
    | comment | [mixed](language.types.mixed.md) | Um comentário arbitrário para ajudar a rastrear a operação por meio da perfilagem do banco de dados, da saída da operação atual e de registros.  Esta opção está disponível no MongoDB 4.4+ e resultará em uma exceção em tempo de execução se especificada para uma versão mais antiga do servidor. |
    | let | [array](language.types.array.md)|[object](language.types.object.md) | Mapa de nomes e valores de parâmetros. Os valores devem ser expressões constantes ou fechadas que não fazem referência a campos do documento. Os parâmetros podem então ser acessados como variáveis em um contexto de expressão agregada (por exemplo, `$$var`).  Esta opção está disponível no MongoDB 5.0+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
    | ordered | [bool](language.types.boolean.md) | As operações ordenadas (**`true`**) são executadas serialmente no servidor MongoDB, enquanto as operações não ordenadas (**`false`**) são enviadas ao servidor em uma ordem arbitrária e podem ser executadas em paralelo. | **`true`** |

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.14.0 | Opções `"comment"` e `"let"` adicionadas. |
| PECL mongodb 1.1.0 | Opção `"bypassDocumentValidation"` adicionada. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWrite::\_\_construct()****

```
<?php

$bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
$bulk->delete([]);
$bulk->insert(['_id' => 1, 'x' => 1]);
$bulk->insert(['_id' => 2, 'x' => 2]);
$bulk->update(
    ['x' => 2],
    ['$set' => ['x' => 1]],
    ['limit' => 1, 'upsert' => false]
);
$bulk->delete(['x' => 1], ['limit' => 1]);
$bulk->update(
    ['_id' => 3],
    ['$set' => ['x' => 3]],
    ['limit' => 1, 'upsert' => true]
);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$writeConcern = new MongoDB\Driver\WriteConcern(1);

try {
    $result = $manager->executeBulkWrite('db.collection', $bulk, ['writeConcern' => $writeConcern]);
} catch (MongoDB\Driver\Exception\BulkWriteException $e) {
    $result = $e->getWriteResult();

    // Verifica se a preocupação de escrita não pôde ser atendida
    if ($writeConcernError = $result->getWriteConcernError()) {
        printf("%s (%d): %s\n",
            $writeConcernError->getMessage(),
            $writeConcernError->getCode(),
            var_export($writeConcernError->getInfo(), true)
        );
    }

    // Verifica se alguma operação de escrita não foi concluída
    foreach ($result->getWriteErrors() as $writeError) {
        printf("Operação#%d: %s (%d)\n",
            $writeError->getIndex(),
            $writeError->getMessage(),
            $writeError->getCode()
        );
    }
} catch (MongoDB\Driver\Exception\Exception $e) {
    printf("Outro erro: %s\n", $e->getMessage());
    exit;
}

printf("Inserido(s) %d documento(s)\n", $result->getInsertedCount());
printf("Atualizado(s) %d documento(s)\n", $result->getModifiedCount());
printf("Atualizado(s)/Inserido(s) %d documento(s)\n", $result->getUpsertedCount());
printf("Removido(s) %d documento(s)\n", $result->getDeletedCount());

?>
```

O exemplo acima produzirá:

```
Inserido(s) 2 documento(s)
Atualizado(s) 1 documento(s)
Atualizado(s)/Inserido(s) 1 documento(s)
Removido(s) 1 documento(s)
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
