# Executa a instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.execute.php

---

# CollectionFind::execute

(No version information available, might only be in Git)

CollectionFind::execute — Executa a instrução

### Descrição

public function **mysql\_xdevapi\CollectionFind::execute**(): [mysql\_xdevapi\DocResult](class.mysql-xdevapi-docresult.md)

Executa a operação de busca;
esta funcionalidade permite encadeamento de métodos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [mysql\_xdevapi\DocResult](class.mysql-xdevapi-docresult.md) que pode ser usado
para buscar resultados ou para consultar o status da operação.

### Examples

**Exemplo #1 Exemplo de CollectionFind**

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

// ...

$collection = $schema->getCollection("people");

$result = $collection
  ->find('job like :job and age > :age')
  ->bind(['job' => 'Butler', 'age' => 16])
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
    string(28) "00005b6b536100000000000000cf"
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
