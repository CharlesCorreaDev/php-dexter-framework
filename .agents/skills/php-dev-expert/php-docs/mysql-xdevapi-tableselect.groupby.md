# Define critérios de agrupamento de seleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableselect.groupby.php

---

# TableSelect::groupBy

(No version information available, might only be in Git)

TableSelect::groupBy — Define critérios de agrupamento de seleção

### Descrição

public function **mysql\_xdevapi\TableSelect::groupBy**([mixed](language.types.mixed.md) `$sort_expr`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

Define critérios de agrupamento para o conjunto de resultados.

### Parâmetros

`sort_expr`
:   Os critérios de agrupamento.

### Valor Retornado

Um objeto TableSelect.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableSelect::groupBy()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 42)")->execute();
$session->sql("INSERT INTO addressbook.names values ('Suki', 31)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$result = $table->select('count(*) as count', 'age')
  ->groupBy('age')->orderBy('age asc')
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
            [count] => 1
            [age] => 31
        )
    [1] => Array
        (
            [count] => 2
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
