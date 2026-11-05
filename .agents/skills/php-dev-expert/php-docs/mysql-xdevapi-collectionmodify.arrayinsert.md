# Insere elemento em um array de campos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.arrayinsert.php

---

# CollectionModify::arrayInsert

(No version information available, might only be in Git)

CollectionModify::arrayInsert — Insere elemento em um array de campos

### Descrição

public function **mysql\_xdevapi\CollectionModify::arrayInsert**([string](language.types.string.md) `$collection_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Adiciona um elemento a um campo do documento, já que múltiplos documentos de um campo são
representados como um array. Diferentemente de
**mysql\_xdevapi\CollectionModify::arrayAppend()** este
método permite especificar onde o novo elemento é inserido definindo
que item o precede, enquanto que
**mysql\_xdevapi\CollectionModify::arrayAppend()** sempre
anexa o novo elemento no final do array.

### Parâmetros

`collection_field`
:   Identifica o item no array após o qual o novo elemento será inserido.
    O formato deste parâmetro é
    `FIELD_NAME[ INDEX ]` onde
    FIELD\_NAME é o nome do campo do documento
    ao qual o elemento será adicionado, e INDEX
    é o índice do elemento dentro do campo.

    O campo INDEX inicia em zero, portanto o primeiro item do array tem um índice de 0.

`expression_or_literal`
:   O novo elemento a inserir após FIELD\_NAME[ INDEX ]

### Valor Retornado

Um objeto CollectionModify que pode ser usado para executar o comando, ou para inserir operações adicionais.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::arrayInsert()****

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
  ->arrayInsert('traits[1]', 'Happy')
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
            [_id] => 00005b6b5361000000000000010d
            [name] => Bernie
            [traits] => Array
                (
                    [0] => Friend
                    [1] => Happy
                    [2] => Brother
                    [3] => Human
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
