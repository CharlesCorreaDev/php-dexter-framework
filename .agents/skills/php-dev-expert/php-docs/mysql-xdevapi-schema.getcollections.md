# Obtém todas as coleções do esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.getcollections.php

---

# Schema::getCollections

(No version information available, might only be in Git)

Schema::getCollections — Obtém todas as coleções do esquema

### Descrição

public function **mysql\_xdevapi\Schema::getCollections**(): [array](language.types.array.md)

Busca uma lista de coleções deste esquema.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Array de todas as coleções neste esquema, onde cada elemento tem o valor de
um objeto Collection com o nome da coleção como chave.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::getCollections()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema  = $session->getSchema("addressbook");
$collect = $schema->createCollection("people");
$collect->add('{"name": "Fred",  "age": 21, "job": "Construction"}')->execute();
$collect->add('{"name": "Wilma", "age": 23, "job": "Teacher"}')->execute();

$collections = $schema->getCollections();
var_dump($collections);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  ["people"]=>
  object(mysql_xdevapi\Collection)#4 (1) {
    ["name"]=>
    string(6) "people"
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
