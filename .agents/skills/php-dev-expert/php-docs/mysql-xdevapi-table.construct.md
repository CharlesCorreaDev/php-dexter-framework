# Construtor de Table

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.construct.php

---

# Table::\_\_construct

(No version information available, might only be in Git)

Table::\_\_construct — Construtor de Table

### Descrição

private function **mysql\_xdevapi\Table::\_\_construct**()

Constrói um objeto de tabela.

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::\_\_construct()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");
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
