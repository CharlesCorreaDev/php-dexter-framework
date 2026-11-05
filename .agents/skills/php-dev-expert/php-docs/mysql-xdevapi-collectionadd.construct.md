# Construtor de CollectionAdd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionadd.construct.php

---

# CollectionAdd::\_\_construct

(No version information available, might only be in Git)

CollectionAdd::\_\_construct — Construtor de CollectionAdd

### Descrição

private function **mysql\_xdevapi\CollectionAdd::\_\_construct**()

Use para adicionar um documento à coleção; chamado a partir de um objeto Collection.

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionAdd::\_\_construct()****

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
