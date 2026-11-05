# Define os critérios de ordenação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.sort.php

---

# CollectionFind::sort

(No version information available, might only be in Git)

CollectionFind::sort — Define os critérios de ordenação

### Descrição

public function **mysql\_xdevapi\CollectionFind::sort**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Ordena o conjunto de resultados pelo campo selecionado no argumento sort\_expr. As ordens suportadas
são ASC (ascendente) ou DESC (descendente). Esta operação é equivalente à 'ORDER BY' do SQL
e segue o mesmo conjunto de regras.

### Parâmetros

`sort_expr`
:   Uma ou mais expressões podem ser fornecidas. A avaliação é da esquerda para a direita,
    e as expressões são separadas por vírgula.

### Valor Retornado

Um objeto CollectionFind que pode ser usado para executar o comando, ou para inserir operações adicionais.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionFind::sort()****

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
  ->sort('job desc', 'age asc')
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
    string(28) "00005b6b53610000000000000106"
    ["age"]=>
    int(18)
    ["job"]=>
    string(6) "Butler"
    ["name"]=>
    string(6) "Alfred"
  }
  [1]=>
  array(4) {
    ["_id"]=>
    string(28) "00005b6b53610000000000000107"
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
