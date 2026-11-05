# Insere linhas na tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.insert.php

---

# Table::insert

(No version information available, might only be in Git)

Table::insert — Insere linhas na tabela

### Descrição

public function **mysql\_xdevapi\Table::insert**([mixed](language.types.mixed.md) `$columns`, [mixed](language.types.mixed.md) `...$more_columns`): [mysql\_xdevapi\TableInsert](class.mysql-xdevapi-tableinsert.md)

Insere linhas na tabela.

### Parâmetros

`columns`
:   As colunas para inserir os dados. Pode ser um array
    com um ou mais valores, ou uma string.

`more_columns`
:   Definições de colunas adicionais.

### Valor Retornado

Um objeto TableInsert; use o método execute() para executar a instrução de inserção.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::insert()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$table ->insert("name", "age")
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
