# Obtém todas as linhas do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-rowresult.fetchall.php

---

# RowResult::fetchAll

(No version information available, might only be in Git)

RowResult::fetchAll — Obtém todas as linhas do resultado

### Descrição

public function **mysql\_xdevapi\RowResult::fetchAll**(): [array](language.types.array.md)

Busca todas as linhas do conjunto de resultados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array numérico com todos os resultados da consulta; cada resultado é
um array associativo. Um array vazio é retornado se nenhuma
linha estiver presente.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\RowResult::fetchAll()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$row = $table->select('name', 'age')->execute()->fetchAll();

print_r($row);
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
