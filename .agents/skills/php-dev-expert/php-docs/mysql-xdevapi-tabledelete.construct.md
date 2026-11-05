# Construtor de TableDelete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tabledelete.construct.php

---

# TableDelete::\_\_construct

(No version information available, might only be in Git)

TableDelete::\_\_construct — Construtor de TableDelete

### Descrição

private function **mysql\_xdevapi\TableDelete::\_\_construct**()

Iniciado pelo uso do método delete().

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableDelete::\_\_construct()****

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
