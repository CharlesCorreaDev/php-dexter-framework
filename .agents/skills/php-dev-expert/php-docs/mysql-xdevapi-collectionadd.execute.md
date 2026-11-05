# Executa a instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionadd.execute.php

---

# CollectionAdd::execute

(No version information available, might only be in Git)

CollectionAdd::execute — Executa a instrução

### Descrição

public function **mysql\_xdevapi\CollectionAdd::execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

O método de execução é requerido para enviar a requisição de operação CRUD
ao servidor MySQL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto Result que pode ser usado para verificar o status da operação,
como o número de linhas afetadas.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionAdd::execute()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

$collection = $schema->getCollection("people");

// Adiciona dois documentos
$collection
  ->add('{"name": "Fred",  "age": 21, "job": "Construction"}')
  ->execute();

$collection
  ->add('{"name": "Wilma", "age": 23, "job": "Teacher"}')
  ->execute();

// Adiciona dois documentos usando um único objeto JSON
$result = $collection
  ->add(
    '{"name": "Bernie",
      "jobs": [{"title":"Cat Herder","Salary":42000}, {"title":"Father","Salary":0}],
      "hobbies": ["Sports","Making cupcakes"]}',
    '{"name": "Jane",
      "jobs": [{"title":"Scientist","Salary":18000}, {"title":"Mother","Salary":0}],
      "hobbies": ["Walking","Making pies"]}')
  ->execute();

// Busca uma lista de IDs gerados no último add()
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
