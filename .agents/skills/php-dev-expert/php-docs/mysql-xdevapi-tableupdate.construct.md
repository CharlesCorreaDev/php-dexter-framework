# Construtor de TableUpdate

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableupdate.construct.php

---

# TableUpdate::\_\_construct

(No version information available, might only be in Git)

TableUpdate::\_\_construct — Construtor de TableUpdate

### Descrição

private function **mysql\_xdevapi\TableUpdate::\_\_construct**()

Iniciado pelo uso do método update().

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableUpdate::\_\_construct()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$res = $table->update()
  ->set('level', 3)
  ->where('age > 15 and age < 22')
  ->limit(4)
  ->orderby(['age asc','name desc'])
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
