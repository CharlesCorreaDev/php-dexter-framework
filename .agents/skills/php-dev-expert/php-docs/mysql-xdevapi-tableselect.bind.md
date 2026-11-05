# Vincula parâmetros de consulta de seleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableselect.bind.php

---

# TableSelect::bind

(No version information available, might only be in Git)

TableSelect::bind — Vincula parâmetros de consulta de seleção

### Descrição

public function **mysql\_xdevapi\TableSelect::bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

Vincula um valor a um marcador específico.

### Parâmetros

`placeholder_values`
:   O nome do marcador, e o valor a vincular.

### Valor Retornado

Um objeto TableSelect.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableSelect::bind()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$result = $table->select('name','age')
  ->where('name like :name and age > :age')
  ->bind(['name' => 'John', 'age' => 42])
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
