# Pesquisa por um documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.find.php

---

# Collection::find

(No version information available, might only be in Git)

Collection::find — Pesquisa por um documento

### Descrição

public function **mysql\_xdevapi\Collection::find**([string](language.types.string.md) `$search_condition` = ?): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Pesquisa uma coleção do banco de dados por um documento ou conjunto de documentos. Os
documentos encontrados são retornados como um objeto CollectionFind que servirá para
modificação ou para busca de resultados.

### Parâmetros

`search_condition`
:   Embora seja opcional, normalmente uma condição é definida para limitar os resultados
    a um subconjunto de documentos.

    Múltiplos elementos podem fazer parte da condição e a sintaxe suporta vinculação de parâmetros.
    A expressão usada como condição de pesquisa precisa ser uma expressão SQL válida.
    Se nenhuma condição de pesquisa for informada (campo vazio), será assumida a expressão find('true').

### Valor Retornado

Um objeto CollectionFind para verificar a operação,
ou buscar os documentos encontrados.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::find()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$collection->add('{"name": "Alfred",     "age": 18, "job": "Butler"}')->execute();
$collection->add('{"name": "Bob",        "age": 19, "job": "Swimmer"}')->execute();
$collection->add('{"name": "Fred",       "age": 20, "job": "Construction"}')->execute();
$collection->add('{"name": "Wilma",      "age": 21, "job": "Teacher"}')->execute();
$collection->add('{"name": "Suki",       "age": 22, "job": "Teacher"}')->execute();

$find   = $collection->find('job LIKE :job AND age > :age');
$result = $find
  ->bind(['job' => 'Teacher', 'age' => 20])
  ->sort('age DESC')
  ->limit(2)
  ->execute();

print_r($result->fetchAll());
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Array
        (
            [_id] => 00005b6b536100000000000000a8
            [age] => 22
            [job] => Teacher
            [name] => Suki
        )
    [1] => Array
        (
            [_id] => 00005b6b536100000000000000a7
            [age] => 21
            [job] => Teacher
            [name] => Wilma
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
