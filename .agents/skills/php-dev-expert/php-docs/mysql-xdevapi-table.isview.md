# Verifica se a tabela é uma visualização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.isview.php

---

# Table::isView

(No version information available, might only be in Git)

Table::isView — Verifica se a tabela é uma visualização

### Descrição

public function **mysql\_xdevapi\Table::isView**(): [bool](language.types.boolean.md)

Determina se o objeto subjacente é ou não uma visualização.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o objeto subjacente for uma visualização, caso contrário **`false`**.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::isView()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

if ($table->isView()) {
    echo "Isto é uma visualização.";
} else {
    echo "Isto não é uma visualização.";
}
?>
```

O exemplo acima produzirá:

```
Isto não é uma visualização.
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
