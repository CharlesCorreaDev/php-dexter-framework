# Obtém nome da tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.getname.php

---

# Table::getName

(No version information available, might only be in Git)

Table::getName — Obtém nome da tabela

### Descrição

public function **mysql\_xdevapi\Table::getName**(): [string](language.types.string.md)

Retorna o nome deste objeto de banco de dados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome deste objeto de banco de dados.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::getName()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

var_dump($table->getName());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(5) "names"
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
