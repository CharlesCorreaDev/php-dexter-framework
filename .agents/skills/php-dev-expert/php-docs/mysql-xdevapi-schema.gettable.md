# Obtém tabela do esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.gettable.php

---

# Schema::getTable

(No version information available, might only be in Git)

Schema::getTable — Obtém tabela do esquema

### Descrição

public function **mysql\_xdevapi\Schema::getTable**([string](language.types.string.md) `$name`): [mysql\_xdevapi\Table](class.mysql-xdevapi-table.md)

Busca um objeto Table para a tabela informada do esquema.

### Parâmetros

`name`
:   Nome da tabela.

### Valor Retornado

Um objeto Table.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::getTable()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$row = $table->select('name', 'age')->execute()->fetchAll();

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
            [name] => John
            [age] => 42
        )
    [1] => Array
        (
            [name] => Sam
            [age] => 33
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
