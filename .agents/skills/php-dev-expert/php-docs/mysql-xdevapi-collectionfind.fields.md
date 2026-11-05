# Define filtro de campo de documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.fields.php

---

# CollectionFind::fields

(No version information available, might only be in Git)

CollectionFind::fields — Define filtro de campo de documento

### Descrição

public function **mysql\_xdevapi\CollectionFind::fields**([string](language.types.string.md) `$projection`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Define as colunas para a consulta retornar. Se não definidas,
todas as colunas são usadas.

### Parâmetros

`projection`
:   Pode ser uma única string ou um array de strings identificando as
    colunas a serem retornadas para cada documento que corresponder à condição de pesquisa.

### Valor Retornado

Um objeto CollectionFind que pode ser usado para processamento adicional.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionFind::fields()****

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
  ->fields('name')
  ->execute();

var_dump($result->fetchAll());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [0]=>
  array(1) {
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
