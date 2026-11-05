# Adiciona valores para inserção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableinsert.values.php

---

# TableInsert::values

(No version information available, might only be in Git)

TableInsert::values — Adiciona valores para inserção

### Descrição

public function **mysql\_xdevapi\TableInsert::values**([array](language.types.array.md) `$row_values`): [mysql\_xdevapi\TableInsert](class.mysql-xdevapi-tableinsert.md)

Define os valores para inserção.

### Parâmetros

`row_values`
:   Valores (como array) de colunas para inserção.

### Valor Retornado

Um objeto TableInsert.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableInsert::values()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$table
  ->insert("name", "age")
  ->values(["Suzanne", 31],["Julie", 43])
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
