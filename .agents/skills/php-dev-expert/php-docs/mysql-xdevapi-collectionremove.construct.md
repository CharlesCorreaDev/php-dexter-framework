# Construtor de CollectionRemove

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionremove.construct.php

---

# CollectionRemove::\_\_construct

(No version information available, might only be in Git)

CollectionRemove::\_\_construct — Construtor de CollectionRemove

### Descrição

private function **mysql\_xdevapi\CollectionRemove::\_\_construct**()

Remove documentos de coleções e é instanciado pelo método
**mysql\_xdevapi\Collection::remove()**.

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::remove()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$collection->add('{"name": "Alfred", "age": 18, "job": "Butler"}')->execute();
$collection->add('{"name": "Bob",    "age": 19, "job": "Painter"}')->execute();

// Remove todos os 'Painters'
$collection
  ->remove("job in ('Painter')")
  ->execute();

// Remove o 'Butler' com maior 'age'
$collection
  ->remove("job in ('Butler')")
  ->sort('age desc')
  ->limit(1)
  ->execute();

// Remove registro com maior 'age'
$collection
  ->remove('true')
  ->sort('age desc')
  ->limit(1)
  ->execute();
?>
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
