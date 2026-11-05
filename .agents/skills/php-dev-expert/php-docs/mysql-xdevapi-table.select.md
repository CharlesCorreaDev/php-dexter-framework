# Seleciona linhas da tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.select.php

---

# Table::select

(No version information available, might only be in Git)

Table::select — Seleciona linhas da tabela

### Descrição

public function **mysql\_xdevapi\Table::select**([mixed](language.types.mixed.md) `$columns`, [mixed](language.types.mixed.md) `...$more_columns`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

Busca dados de uma tabela.

### Parâmetros

`columns`
:   As colunas das quais os dados serão selecionados. Pode ser um array
    com um ou mais valores, ou uma string.

`more_columns`
:   Definições de colunas adicionais.

### Valor Retornado

Um objeto TableSelect; use o método execute() para executar a
seleção e retornar um objeto RowResult.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::count()****

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
