# Obtém contagem de linhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.count.php

---

# Table::count

(No version information available, might only be in Git)

Table::count — Obtém contagem de linhas

### Descrição

public function **mysql\_xdevapi\Table::count**(): [int](language.types.integer.md)

Busca o número de linhas na tabela.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número total de linhas na tabela.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::count()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

var_dump($table->count());
?>
```

O exemplo acima produzirá:

```
int(2)
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
