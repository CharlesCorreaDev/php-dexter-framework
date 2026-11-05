# Obtém a contagem de alertas da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-docresult.getwarningscount.php

---

# DocResult::getWarningsCount

(No version information available, might only be in Git)

DocResult::getWarningsCount — Obtém a contagem de alertas da última operação

### Descrição

public function **mysql\_xdevapi\DocResult::getWarningsCount**(): [int](language.types.integer.md)

Retorna o número de alertas gerados pela última operação. Especificamente,
estes alertas são gerados pelo servidor MySQL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de alertas gerados pela última operação.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\DocResult::getWarningsCount()****

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

if (!$result->getWarningsCount()) {
    echo "Ocorreu um erro:\n";
    print_r($result->getWarnings());
    exit;
}

var_dump($result->fetchOne());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(4) {
  ["_id"]=>
  string(28) "00005b6b53610000000000000135"
  ["age"]=>
  int(42)
  ["job"]=>
  string(6) "Butler"
  ["name"]=>
  string(8) "Reginald"
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
