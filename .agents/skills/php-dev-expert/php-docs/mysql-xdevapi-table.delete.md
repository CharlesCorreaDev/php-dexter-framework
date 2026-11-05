# Deleta linhas da tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.delete.php

---

# Table::delete

(No version information available, might only be in Git)

Table::delete — Deleta linhas da tabela

### Descrição

public function **mysql\_xdevapi\Table::delete**(): [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md)

Deleta linhas da tabela.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto TableDelete; use o método execute() para executar a instrução de deleção.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::delete()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$table->delete()->where("name = :name")->orderby("age DESC")->limit(1)->bind(['name' => 'John'])->execute();
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
