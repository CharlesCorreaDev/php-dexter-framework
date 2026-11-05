# Limita as linhas selecionadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableselect.limit.php

---

# TableSelect::limit

(No version information available, might only be in Git)

TableSelect::limit — Limita as linhas selecionadas

### Descrição

public function **mysql\_xdevapi\TableSelect::limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

Define o número máximo de registros ou documentos a retornar.

### Parâmetros

`rows`
:   O número máximo de registros ou documentos.

### Valor Retornado

Um objeto TableSelect.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableSelect::limit()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$result = $table->select('name', 'age')
  ->limit(1)
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
