# Define os critérios de ordenação na deleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tabledelete.orderby.php

---

# TableDelete::orderby

(No version information available, might only be in Git)

TableDelete::orderby — Define os critérios de ordenação na deleção

### Descrição

public function **mysql\_xdevapi\TableDelete::orderby**([string](language.types.string.md) `$orderby_expr`): [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md)

Define as opções de ordenação para um conjunto de resultados.

### Parâmetros

`orderby_expr`
:   A definição de ordenação.

### Valor Retornado

Um objeto TableDelete.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableDelete::orderBy()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$table->delete()
  ->where("age = :age")
  ->bind(['age' => 42])
  ->orderby("name DESC")
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
