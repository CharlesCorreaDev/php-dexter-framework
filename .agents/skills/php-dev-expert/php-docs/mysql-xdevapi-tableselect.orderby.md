# Define critérios de ordenamento na seleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableselect.orderby.php

---

# TableSelect::orderby

(No version information available, might only be in Git)

TableSelect::orderby — Define critérios de ordenamento na seleção

### Descrição

public function **mysql\_xdevapi\TableSelect::orderby**([mixed](language.types.mixed.md) `$sort_expr`, [mixed](language.types.mixed.md) `...$sort_exprs`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

Define a ordem por critérios.

### Parâmetros

`sort_expr`
:   As expressões que definem a ordenação por critério. Pode ser um array
    com uma ou mais expressões ou uma string.

`sort_exprs`
:   Parâmetros sort\_expr adicionais.

### Valor Retornado

A TableSelect object.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableSelect::orderBy()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$result = $table->select('name', 'age')
  ->orderBy('name desc')
  ->execute();

$row = $result->fetchAll();
print_r($row);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [name] => Sam
            [age] => 42
        )
    [1] => Array
        (
            [name] => John
            [age] => 42
        )
)
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
