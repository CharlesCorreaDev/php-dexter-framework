# Remove um documento da coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.removeone.php

---

# Collection::removeOne

(No version information available, might only be in Git)

Collection::removeOne — Remove um documento da coleção

### Descrição

public function **mysql\_xdevapi\Collection::removeOne**([string](language.types.string.md) `$id`): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

Remove da coleção o documento com o ID correspondente.
É um atalho para `Collection.remove("_id = :id").bind("id", id).execute()`.

### Parâmetros

`id`
:   O ID do documento da coleção a ser removido. Tipicamente é o
    \_id gerado pelo servidor MySQL quando o registro
    foi inserido.

### Valor Retornado

Um objeto Result que pode ser usado para consultar o número de itens afetados ou o
número de alertas gerados pela operação.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::removeOne()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$result = $collection->add('{"name": "Alfred", "age": 18, "job": "Butler"}')->execute();

// Normalmente o _id é conhecido por outros meios,
// mas para este exemplo vamos buscar o id gerado e usá-lo
$ids       = $result->getGeneratedIds();
$alfred_id = $ids[0];

$result = $collection->removeOne($alfred_id);

if(!$result->getAffectedItemsCount()) {
    echo "Alfred com id $alfred_id não foi removido.";
} else {
    echo "Tchau, Alfred, pode levar o _id $alfred_id com você.";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Tchau, Alfred, pode levar o _id 00005b6b536100000000000000cb com você.
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
