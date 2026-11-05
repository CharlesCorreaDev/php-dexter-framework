# Executa a instrução de deleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tabledelete.execute.php

---

# TableDelete::execute

(No version information available, might only be in Git)

TableDelete::execute — Executa a instrução de deleção

### Descrição

public function **mysql\_xdevapi\TableDelete::execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

Executa a instrução de deleção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto Result.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableDelete::execute()****

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
