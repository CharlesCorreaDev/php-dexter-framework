# Pula um número de elementos a serem retornados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.offset.php

---

# CollectionFind::offset

(No version information available, might only be in Git)

CollectionFind::offset — Pula um número de elementos a serem retornados

### Descrição

public function **mysql\_xdevapi\CollectionFind::offset**([int](language.types.integer.md) `$position`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Pula (desloca) este número de elementos que de outra forma seriam retornados
pela operação de pesquisa. Use com o método limit().

Definir um deslocamento maior que o tamanho do conjunto de resultados resulta em um conjunto vazio.

### Parâmetros

`position`
:   Número de elementos a pular para a operação limit().

### Valor Retornado

Um objeto CollectionFind que pode ser usado para processamento adicional.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionFind::offset()****

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
  ->find()
  ->sort('age asc')
  ->offset(1)
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
