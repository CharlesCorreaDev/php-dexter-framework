# Atualiza linhas na tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.update.php

---

# Table::update

(No version information available, might only be in Git)

Table::update — Atualiza linhas na tabela

### Descrição

public function **mysql\_xdevapi\Table::update**(): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

Atualiza linhas na tabela.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto TableUpdate; use o método execute() para executar a instrução de atualização.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::update()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$table->update()->set('age',34)->where('name = "Sam"')->limit(1)->execute();
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
