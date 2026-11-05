# Construtor de RowResult

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-rowresult.construct.php

---

# RowResult::\_\_construct

(No version information available, might only be in Git)

RowResult::\_\_construct — Construtor de RowResult

### Descrição

private function **mysql\_xdevapi\RowResult::\_\_construct**()

Representa o conjunto de resultados obtido a partir de consulta ao banco de dados.

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\RowResult::\_\_construct()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$row = $table->select('name', 'age')->where('age > 18')->execute()->fetchAll();

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
