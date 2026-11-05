# Define atributo de documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.set.php

---

# CollectionModify::set

(No version information available, might only be in Git)

CollectionModify::set — Define atributo de documento

### Descrição

public function **mysql\_xdevapi\CollectionModify::set**([string](language.types.string.md) `$collection_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Define ou atualiza atributos em documentos de uma coleção.

### Parâmetros

`collection_field`
:   O caminho (nome) do documento do item a ser definido.

`expression_or_literal`
:   O valor para o qual será definido.

### Valor Retornado

Um objeto CollectionModify.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::set()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$result = $collection
  ->add(
  '{"name":   "Bernie",
    "traits": ["Friend", "Brother", "Human"]}')
  ->execute();

$collection
  ->modify("name = :name")
  ->bind(['name' => 'Bernie'])
  ->set("name", "Bern")
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
            [_id] => 00005b6b53610000000000000111
            [name] => Bern
            [traits] => Array
                (
                    [0] => Friend
                    [1] => Brother
                    [2] => Human
                )
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
