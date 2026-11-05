# Substitui campo de documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.replace.php

---

# CollectionModify::replace

(No version information available, might only be in Git)

CollectionModify::replace — Substitui campo de documento

### Descrição

public function **mysql\_xdevapi\CollectionModify::replace**([string](language.types.string.md) `$collection_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Substitui (atualiza) um valor de campo fornecido com um novo.

### Parâmetros

`collection_field`
:   O caminho do documento do item a definir.

`expression_or_literal`
:   O valor a ser definido no atributo especificado.

### Valor Retornado

Um objeto CollectionModify.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::replace()****

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
  ->replace("name", "Bern")
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
            [_id] => 00005b6b5361000000000000011b
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
