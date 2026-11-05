# Vincula valor ao marcador da consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.bind.php

---

# CollectionModify::bind

(No version information available, might only be in Git)

CollectionModify::bind — Vincula valor ao marcador da consulta

### Descrição

public function **mysql\_xdevapi\CollectionModify::bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Vincula um parâmetro ao marcador na condição de pesquisa da operação de modificação.

O marcador tem a forma :NOME onde ':' é um prefixo comum que deve sempre existir antes de qualquer NOME
de marcador. O método de vinculação aceita uma lista de marcadores se múltiplas
entidades tiverem que ser substituídas na condição de pesquisa da operação de modificação.

### Parâmetros

`placeholder_values`
:   Valores de marcadores para substituir na condição de pesquisa. Valores múltiplos são permitidos
    e devem ser passados como um array de mapeamentos NOME\_DO\_MARCADOR=>VALOR\_DO\_MARCADOR.

### Valor Retornado

Um objeto CollectionModify que pode ser usado para executar o comando, ou para inserir operações adicionais.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::bind()****

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
            [_id] => 00005b6b53610000000000000110
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
