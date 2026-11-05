# Obtém os IDs gerados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-result.getgeneratedids.php

---

# Result::getGeneratedIds

(No version information available, might only be in Git)

Result::getGeneratedIds — Obtém os IDs gerados

### Descrição

public function **mysql\_xdevapi\Result::getGeneratedIds**(): [array](language.types.array.md)

Busca os valores de \_id gerados na última operação.
O campo de \_id único é gerado pelo servidor MySQL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de IDs gerados na última operação,
ou um array vazio se não houve nenhum.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Result::getGeneratedIds()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

$collection = $schema->getCollection("people");

$result = $collection->add(
  '{"name": "Bernie",
    "jobs": [{"title":"Cat Herder","Salary":42000}, {"title":"Father","Salary":0}],
    "hobbies": ["Sports","Making cupcakes"]}',
  '{"name": "Jane",
    "jobs": [{"title":"Scientist","Salary":18000}, {"title":"Mother","Salary":0}],
    "hobbies": ["Walking","Making pies"]}')->execute();

$ids = $result->getGeneratedIds();
var_dump($ids);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  [0]=>
  string(28) "00005b6b53610000000000000064"
  [1]=>
  string(28) "00005b6b53610000000000000065"
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
