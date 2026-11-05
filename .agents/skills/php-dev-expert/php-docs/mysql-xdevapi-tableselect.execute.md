# Executa instrução de seleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableselect.execute.php

---

# TableSelect::execute

(No version information available, might only be in Git)

TableSelect::execute — Executa instrução de seleção

### Descrição

public function **mysql\_xdevapi\TableSelect::execute**(): [mysql\_xdevapi\RowResult](class.mysql-xdevapi-rowresult.md)

Executa a instrução de seleção encadeando-a com o método execute().

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto RowResult.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableSelect::execute()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$result = $table->select('name','age')
  ->where('name like :name and age > :age')
  ->bind(['name' => 'John', 'age' => 42])
  ->orderBy('age desc')
  ->execute();

$row = $result->fetchAll();
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
