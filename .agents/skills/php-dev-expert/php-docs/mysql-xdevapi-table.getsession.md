# Obtém a sessão da tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.getsession.php

---

# Table::getSession

(No version information available, might only be in Git)

Table::getSession — Obtém a sessão da tabela

### Descrição

public function **mysql\_xdevapi\Table::getSession**(): [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md)

Obtém a sessão associada com a tabela.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto Session.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::getSession()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

var_dump($table->getSession());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(mysql_xdevapi\Session)#9 (0) {
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
