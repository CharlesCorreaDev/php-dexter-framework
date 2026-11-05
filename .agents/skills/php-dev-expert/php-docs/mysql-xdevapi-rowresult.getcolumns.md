# Obtém metadados de coluna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-rowresult.getcolumns.php

---

# RowResult::getColumns

(No version information available, might only be in Git)

RowResult::getColumns — Obtém metadados de coluna

### Descrição

public function **mysql\_xdevapi\RowResult::getColumns**(): [array](language.types.array.md)

Recupera metadados das colunas presentes no conjunto de resultados.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de objetos FieldMetadata representando as colunas no resultado,
ou um array vazio se o conjunto de resultados estiver vazio.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\RowResult::getColumns()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE addressbook")->execute();
$session->sql("CREATE DATABASE foo")->execute();
$session->sql("CREATE TABLE foo.test_table(x int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$sql = $session->sql("SELECT * from addressbook.names")->execute();

$cols = $sql->getColumns();

print_r($cols);
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => mysql_xdevapi\FieldMetadata Object
        (
            [type] => 7
            [type_name] => BYTES
            [name] => name
            [original_name] => name
            [table] => names
            [original_table] => names
            [schema] => addressbook
            [catalog] => def
            [collation] => 255
            [fractional_digits] => 0
            [length] => 65535
            [flags] => 0
            [content_type] => 0
        )
    [1] => mysql_xdevapi\FieldMetadata Object
        (
            [type] => 1
            [type_name] => SINT
            [name] => age
            [original_name] => age
            [table] => names
            [original_table] => names
            [schema] => addressbook
            [catalog] => def
            [collation] => 0
            [fractional_digits] => 0
            [length] => 11
            [flags] => 0
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
