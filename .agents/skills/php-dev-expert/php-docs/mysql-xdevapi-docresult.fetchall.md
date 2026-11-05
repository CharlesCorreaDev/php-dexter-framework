# Obtém todas as linhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-docresult.fetchall.php

---

# DocResult::fetchAll

(No version information available, might only be in Git)

DocResult::fetchAll — Obtém todas as linhas

### Descrição

public function **mysql\_xdevapi\DocResult::fetchAll**(): [array](language.types.array.md)

Busca todos os resultados de um conjunto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array numérico com todos os resultados da consulta; cada resultado é
um array associativo. Um array vazio é retornado se nenhuma
linha estiver presente.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\DocResult::fetchAll()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

$create->add('{"name": "Alfred", "age": 18, "job": "Butler"}')->execute();
$create->add('{"name": "Reginald", "age": 42, "job": "Butler"}')->execute();

// ...

$collection = $schema->getCollection("people");

// Gera um objeto DocResult
$result = $collection
  ->find('job like :job and age > :age')
  ->bind(['job' => 'Butler', 'age' => 16])
  ->sort('age desc')
  ->execute();

var_dump($result->fetchAll());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {

  [0]=>
  array(4) {
    ["_id"]=>
    string(28) "00005b6b53610000000000000123"
    ["age"]=>
    int(42)
    ["job"]=>
    string(6) "Butler"
    ["name"]=>
    string(8) "Reginald"
  }

  [1]=>
  array(4) {
    ["_id"]=>
    string(28) "00005b6b53610000000000000122"
    ["age"]=>
    int(18)
    ["job"]=>
    string(6) "Butler"
    ["name"]=>
    string(6) "Alfred"
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
