# Obtém a contagem de documentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.count.php

---

# Collection::count

(No version information available, might only be in Git)

Collection::count — Obtém a contagem de documentos

### Descrição

public function **mysql\_xdevapi\Collection::count**(): [int](language.types.integer.md)

Esta funcionalidade é similar à operação SQL `SELECT COUNT(*)`
no servidor MySQL para o esquema e coleção atuais.
Em outras palavras, ela conta o número de documentos na coleção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de documentos na coleção.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::count()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

$collection = $schema->getCollection("people");

$result = $collection
  ->add(
  '{"name": "Bernie",
    "jobs": [
      {"title":"Cat Herder","Salary":42000},
      {"title":"Father","Salary":0}
    ],
    "hobbies": ["Sports","Making cupcakes"]}',
  '{"name": "Jane",
    "jobs": [
      {"title":"Scientist","Salary":18000},
      {"title":"Mother","Salary":0}
    ],
    "hobbies": ["Walking","Making pies"]}')
  ->execute();

var_dump($collection->count());
?>
```

O exemplo acima produzirá:

```
int(2)
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
