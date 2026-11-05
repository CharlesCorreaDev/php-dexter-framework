# Anexa elemento a um array de campos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.arrayappend.php

---

# CollectionModify::arrayAppend

(No version information available, might only be in Git)

CollectionModify::arrayAppend — Anexa elemento a um array de campos

### Descrição

public function **mysql\_xdevapi\CollectionModify::arrayAppend**([string](language.types.string.md) `$collection_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Adiciona um elemento a um array de campos do documento, já que múltiplos documentos de um campo são representados como um array.
Diferentemente de arrayInsert(), arrayAppend() sempre anexa o novo elemento
ao final do array, enquanto que arrayInsert() pode definir a localização.

### Parâmetros

`collection_field`
:   O identificador do campo onde o novo elemento é inserido.

`expression_or_literal`
:   O novo elemento a inserir no final do array de campos do documento.

### Valor Retornado

Um objeto CollectionModify que pode ser usado para executar o comando, ou para operações adicionais.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::arrayAppend()****

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
  ->modify("name in ('Bernie', 'Jane')")
  ->arrayAppend('traits', 'Happy')
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
            [_id] => 00005b6b5361000000000000010c
            [name] => Bernie
            [traits] => Array
                (
                    [0] => Friend
                    [1] => Brother
                    [2] => Human
                    [3] => Happy
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
