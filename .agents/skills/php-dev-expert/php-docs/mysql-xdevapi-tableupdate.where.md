# Define filtro de pesquisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableupdate.where.php

---

# TableUpdate::where

(No version information available, might only be in Git)

TableUpdate::where — Define filtro de pesquisa

### Descrição

public function **mysql\_xdevapi\TableUpdate::where**([string](language.types.string.md) `$where_expr`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

Define a condição de pesquisa para filtrar.

### Parâmetros

`where_expr`
:   A condição de pesquisa para filtrar documentos ou registros.

### Valor Retornado

Um objeto TableUpdate.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableUpdate::where()****

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
