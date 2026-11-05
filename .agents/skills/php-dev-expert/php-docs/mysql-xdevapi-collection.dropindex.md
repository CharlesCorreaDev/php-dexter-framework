# Remove um índice da coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.dropindex.php

---

# Collection::dropIndex

(No version information available, might only be in Git)

Collection::dropIndex — Remove um índice da coleção

### Descrição

public function **mysql\_xdevapi\Collection::dropIndex**([string](language.types.string.md) `$index_name`): [bool](language.types.boolean.md)

Remove um índice da coleção.

Esta operação não gera um erro se o índice não existir, mas
neste caso é retornado **`false`**.

### Parâmetros

`index_name`
:   Nome do índice da coleção a ser removido.

### Valor Retornado

**`true`** se a operação DROP INDEX for bem sucedida, caso contrário **`false`**.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::dropIndex()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

// ...

$collection = $schema->getCollection("people");

$collection->createIndex(
  'myindex',
  '{"fields": [{"field": "$.name", "type": "TEXT(25)", "required": true}], "unique": false}'
);

// ...

if ($collection->dropIndex('myindex')) {
    echo "Um índice de nome 'myindex' foi encontrado e removido.";
}
?>
```

O exemplo acima produzirá:

```
Um índice de nome 'myindex' foi encontrado e removido.
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
