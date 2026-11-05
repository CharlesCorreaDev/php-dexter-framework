# Executa instrução de atualização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableupdate.execute.php

---

# TableUpdate::execute

(No version information available, might only be in Git)

TableUpdate::execute — Executa instrução de atualização

### Descrição

public function **mysql\_xdevapi\TableUpdate::execute**(): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

Executa a instrução de atualização.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto TableUpdate.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableUpdate::execute()****

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
