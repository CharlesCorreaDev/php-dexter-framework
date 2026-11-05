# Define condição de pesquisa na deleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tabledelete.where.php

---

# TableDelete::where

(No version information available, might only be in Git)

TableDelete::where — Define condição de pesquisa na deleção

### Descrição

public function **mysql\_xdevapi\TableDelete::where**([string](language.types.string.md) `$where_expr`): [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md)

Define a condição de pesquisa para filtrar.

### Parâmetros

`where_expr`
:   Define a condição de pesquisa para filtrar documentos ou registros.

### Valor Retornado

Objeto TableDelete.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableDelete::where()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$table->delete()
  ->where("id = :id")
  ->bind(['id' => 42])
  ->limit(1)
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
