# Adiciona um documento na coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.add.php

---

# Collection::add

(No version information available, might only be in Git)

Collection::add — Adiciona um documento na coleção

### Descrição

public function **mysql\_xdevapi\Collection::add**([mixed](language.types.mixed.md) `$document`): [mysql\_xdevapi\CollectionAdd](class.mysql-xdevapi-collectionadd.md)

Dispara a inserção do(s) documento(s) informado(s) na coleção,
múltiplas variantes deste método são suportadas. As opções incluem:

1. Adiciona um único documento como uma string JSON.
2. Adiciona um único documento como um array no formato:
   `[ 'field' => 'value', 'field2' => 'value2' ... ]`
3. Uma combinação de ambos, múltiplos documentos podem ser adicionados na mesma operação.

### Parâmetros

`document`
:   Um ou múltiplos documentos, pode ser um JSON ou um array de campos com
    seus valores associados. Não pode ser um array vazio.

    O servidor MySQL gera automaticamente um valor único de `_id` para
    cada documento (recomendado), embora também possa ser adicionado manualmente. Este valor precisa ser
    único, caso contrário a operação de adição falhará.

### Valor Retornado

Um objeto CollectionAdd. Use execute() para retornar um Result que possa ser usado para consultar o número
de itens afetados, o número de alertas gerados pela operação, ou para buscar uma lista de
IDs gerados para os documentos inseridos.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::add()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

$collection = $schema->getCollection("people");

// Adiciona dois documentos
$collection->add('{"name": "Fred",  "age": 21, "job": "Construction"}')->execute();
$collection->add('{"name": "Wilma", "age": 23, "job": "Teacher"}')->execute();

// Adiciona dois documentos usando um único objeto JSON
$result = $collection->add(
  '{"name": "Bernie",
    "jobs": [{"title":"Cat Herder","Salary":42000}, {"title":"Father","Salary":0}],
    "hobbies": ["Sports","Making cupcakes"]}',
  '{"name": "Jane",
    "jobs": [{"title":"Scientist","Salary":18000}, {"title":"Mother","Salary":0}],
    "hobbies": ["Walking","Making pies"]}')->execute();

// Busca uma lista de IDs gerados pelo último add()
$ids = $result->getGeneratedIds();
print_r($ids);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => 00005b6b53610000000000000056
    [1] => 00005b6b53610000000000000057
)
```

### Notas

> **Nota**:
>
> Um \_id único é gerado pelo MySQL Server 8.0 ou superior, como demonstrado
> no exemplo. O campo \_id precisa ser definido manualmente se o
> MySQL Server 5.7 estiver sendo usado.

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
