# Vincula parâmetros na instrução de deleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tabledelete.bind.php

---

# TableDelete::bind

(No version information available, might only be in Git)

TableDelete::bind — Vincula parâmetros na instrução de deleção

### Descrição

public function **mysql\_xdevapi\TableDelete::bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md)

Vincula um valor a um marcador específico.

### Parâmetros

`placeholder_values`
:   O nome do marcador e o valor a vincular.

### Valor Retornado

Um objeto TableDelete.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableDelete::bind()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$table->delete()
  ->where("name = :name")
  ->bind(['name' => 'John'])
  ->orderby("age DESC")
  ->limit(1)
  ->execute();

?>
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
