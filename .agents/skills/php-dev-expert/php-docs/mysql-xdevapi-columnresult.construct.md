# Construtor de ColumnResult

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-columnresult.construct.php

---

# ColumnResult::\_\_construct

(No version information available, might only be in Git)

ColumnResult::\_\_construct — Construtor de ColumnResult

### Descrição

private function **mysql\_xdevapi\ColumnResult::\_\_construct**()

Recupera os metadados de coluna, como seu conjunto de caracteres; é instanciado
pelo método **mysql\_xdevapi\RowResult::getColumns()**.

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\ColumnResult::\_\_construct()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS nonsense")->execute();
$session->sql("CREATE DATABASE nonsense")->execute();
$session->sql("CREATE TABLE nonsense.numbers (hello int, world float unsigned)")->execute();
$session->sql("INSERT INTO  nonsense.numbers values (42, 42)")->execute();

$schema = $session->getSchema("nonsense");
$table  = $schema->getTable("numbers");

$result1 = $table->select('hello','world')->execute();

// Retorna um array de objetos ColumnResult
$columns = $result1->getColumns();

foreach ($columns as $column) {
    echo "\nColuna de nome " , $column->getColumnLabel();
    echo " é do tipo "       , $column->getType();
    echo " e é ", ($column->isNumberSigned() === 0) ? "sem sinal." : "com sinal.";
}

// Alternativamente
$result2 = $session->sql("SELECT * FROM nonsense.numbers")->execute();

// Retorna um array de objetos FieldMetadata
print_r($result2->getColumns());
```

O exemplo acima produzirá
algo semelhante a:

```
Coluna de nome hello é do tipo 19 e é com sinal.
Coluna de nome world é do tipo 4 e é sem sinal.

Array
(
    [0] => mysql_xdevapi\FieldMetadata Object
        (
            [type] => 1
            [type_name] => SINT
            [name] => hello
            [original_name] => hello
            [table] => numbers
            [original_table] => numbers
            [schema] => nonsense
            [catalog] => def
            [collation] => 0
            [fractional_digits] => 0
            [length] => 11
            [flags] => 0
            [content_type] => 0
        )
    [1] => mysql_xdevapi\FieldMetadata Object
        (
            [type] => 6
            [type_name] => FLOAT
            [name] => world
            [original_name] => world
            [table] => numbers
            [original_table] => numbers
            [schema] => nonsense
            [catalog] => def
            [collation] => 0
            [fractional_digits] => 31
            [length] => 12
            [flags] => 1
            [content_type] => 0
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
