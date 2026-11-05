# Define o deslocamento limite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableselect.offset.php

---

# TableSelect::offset

(No version information available, might only be in Git)

TableSelect::offset — Define o deslocamento limite

### Descrição

public function **mysql\_xdevapi\TableSelect::offset**([int](language.types.integer.md) `$position`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

Pula o número informado de linhas no resultado.

### Parâmetros

`position`
:   O deslocamento limite.

### Valor Retornado

Um objeto TableSelect.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableSelect::offset()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 42)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$result = $table->select('name', 'age')
  ->limit(1)
  ->offset(1)
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
