# Limita o número de documentos modificados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.limit.php

---

# CollectionModify::limit

(No version information available, might only be in Git)

CollectionModify::limit — Limita o número de documentos modificados

### Descrição

public function **mysql\_xdevapi\CollectionModify::limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Limita o número de documentos modificados por esta operação.
Opcionalmente pode ser combinada com skip() para definir um valor de deslocamento.

### Parâmetros

`rows`
:   O número máximo de documentos a modificar.

### Valor Retornado

Um objeto CollectionModify.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::limit()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$collection->add('{"name": "Fred",  "age": 21, "job": "Construction"}')->execute();
$collection->add('{"name": "Wilma", "age": 23, "job": "Teacher"}')->execute();
$collection->add('{"name": "Betty", "age": 24, "job": "Teacher"}')->execute();

$collection
  ->modify("job = :job")
  ->bind(['job' => 'Teacher'])
  ->set('job', 'Principal')
  ->limit(1)
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
            [_id] => 00005b6b53610000000000000118
            [age] => 21
            [job] => Construction
            [name] => Fred
        )
    [1] => Array
        (
            [_id] => 00005b6b53610000000000000119
            [age] => 23
            [job] => Principal
            [name] => Wilma
        )
    [2] => Array
        (
            [_id] => 00005b6b5361000000000000011a
            [age] => 24
            [job] => Teacher
            [name] => Betty
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
