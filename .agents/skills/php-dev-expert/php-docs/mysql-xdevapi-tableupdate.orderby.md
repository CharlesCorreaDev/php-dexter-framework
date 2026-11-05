# Define critérios de ordenação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableupdate.orderby.php

---

# TableUpdate::orderby

(No version information available, might only be in Git)

TableUpdate::orderby — Define critérios de ordenação

### Descrição

public function **mysql\_xdevapi\TableUpdate::orderby**([mixed](language.types.mixed.md) `$orderby_expr`, [mixed](language.types.mixed.md) `...$orderby_exprs`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

Define os critérios de ordenação.

### Parâmetros

`orderby_expr`
:   As expressões que definem a ordenação por critério. Pode ser um array
    com uma ou mais expressões ou uma string.

`orderby_exprs`
:   Parâmetros sort\_expr adicionais.

### Valor Retornado

Um objeto TableUpdate.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableUpdate::orderby()****

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
