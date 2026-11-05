# Obtém esquema da tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.getschema.php

---

# Table::getSchema

(No version information available, might only be in Git)

Table::getSchema — Obtém esquema da tabela

### Descrição

public function **mysql\_xdevapi\Table::getSchema**(): [mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md)

Busca o esquema associado com a tabela.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto Schema.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::getSchema()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

var_dump($table->getSchema());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(mysql_xdevapi\Schema)#9 (1) {
  ["name"]=>
  string(11) "addressbook"
}
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
