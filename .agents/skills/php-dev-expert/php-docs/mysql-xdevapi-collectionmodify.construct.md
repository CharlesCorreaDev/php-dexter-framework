# Construtor de CollectionModify

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.construct.php

---

# CollectionModify::\_\_construct

(No version information available, might only be in Git)

CollectionModify::\_\_construct — Construtor de CollectionModify

### Descrição

private function **mysql\_xdevapi\CollectionModify::\_\_construct**()

Modifica (atualiza) uma coleção e é instanciada pelo método
**mysql\_xdevapi\Collection::modify()**.

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::\_\_construct()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$result = $collection
  ->add(
  '{"name":   "Bernie",
    "traits": ["Friend", "Brother", "Human"]}')
  ->execute();

$collection
  ->modify("name in ('Bernie', 'Jane')")
  ->arrayAppend('traits', 'Happy')
  ->execute();

$result = $collection
  ->find()
  ->execute();

print_r($result->fetchAll());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [_id] => 00005b6b5361000000000000010c
            [name] => Bernie
            [traits] => Array
                (
                    [0] => Friend
                    [1] => Brother
                    [2] => Human
                    [3] => Happy
                )
        )
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
