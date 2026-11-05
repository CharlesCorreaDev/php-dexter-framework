# Obtém uma coleção como um objeto Table

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.getcollectionastable.php

---

# Schema::getCollectionAsTable

(No version information available, might only be in Git)

Schema::getCollectionAsTable — Obtém uma coleção como um objeto Table

### Descrição

public function **mysql\_xdevapi\Schema::getCollectionAsTable**([string](language.types.string.md) `$name`): [mysql\_xdevapi\Table](class.mysql-xdevapi-table.md)

Obtém uma coleção, porém como objeto Table ao invés de objeto Collection.

### Parâmetros

`name`
:   Nome da coleção a ser instanciada como objeto Table.

### Valor Retornado

Um objeto [mysql\_xdevapi\Table](class.mysql-xdevapi-table.md) para a coleção.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::getCollectionAsTable()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema  = $session->getSchema("addressbook");
$collect = $schema->createCollection("people");
$collect->add('{"name": "Fred",  "age": 21, "job": "Construction"}')->execute();
$collect->add('{"name": "Wilma", "age": 23, "job": "Teacher"}')->execute();

$table      = $schema->getCollectionAsTable("people");
$collection = $schema->getCollection("people");

var_dump($table);
var_dump($collection);
```

O exemplo acima produzirá
algo semelhante a:

```
object(mysql_xdevapi\Table)#4 (1) {
  ["name"]=>
  string(6) "people"
}

object(mysql_xdevapi\Collection)#5 (1) {
  ["name"]=>
  string(6) "people"
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
