# Limita o número de documentos retornados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.limit.php

---

# CollectionFind::limit

(No version information available, might only be in Git)

CollectionFind::limit — Limita o número de documentos retornados

### Descrição

public function **mysql\_xdevapi\CollectionFind::limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Define o número máximo de documentos a retornar.

### Parâmetros

`rows`
:   Número máximo de documentos.

### Valor Retornado

Um objeto CollectionFind que pode ser usado para processamento adicional;
pode ser encadeado com o método execute() para retornar um objeto DocResult.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionFind::limit()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");
$create
  ->add('{"name": "Alfred", "age": 18, "job": "Butler"}')
  ->execute();
$create
  ->add('{"name": "Reginald", "age": 42, "job": "Butler"}')
  ->execute();

// ...

$collection = $schema->getCollection("people");

$result = $collection
  ->find('job like :job and age > :age')
  ->bind(['job' => 'Butler', 'age' => 16])
  ->sort('age desc')
  ->limit(1)
  ->execute();

var_dump($result->fetchAll());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [0]=>
  array(4) {
    ["_id"]=>
    string(28) "00005b6b536100000000000000f3"
    ["age"]=>
    int(42)
    ["job"]=>
    string(6) "Butler"
    ["name"]=>
    string(8) "Reginald"
  }
}
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
