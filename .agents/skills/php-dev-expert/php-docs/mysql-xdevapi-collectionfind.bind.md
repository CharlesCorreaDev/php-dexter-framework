# Vincula valor a marcador na consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.bind.php

---

# CollectionFind::bind

(No version information available, might only be in Git)

CollectionFind::bind — Vincula valor a marcador na consulta

### Descrição

public function **mysql\_xdevapi\CollectionFind::bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Permite ao usuário vincular um parâmetro ao marcador na condição de pesquisa da operação de busca.
O marcador tem a forma de :NOME onde ':' é um prefixo comum que precisa sempre existir antes de qualquer NOME,
o nome real do marcador. A função de vinculação aceita uma lista de marcadores se múltiplas
entidades precisarem ser substituídas na condição de pesquisa.

### Parâmetros

`placeholder_values`
:   Valores a substituir na condição de pesquisa; múltiplos valores são permitidos
    e são passados como um array onde "NOME\_MARCADOR => VALOR\_MARCADOR".

### Valor Retornado

Um objeto CollectionFind,
ou encadeado com execute() para retornar um objeto Result.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionFind::bind()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");
$result = $create
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
