# Vincula parâmetros de consulta de atualização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableupdate.bind.php

---

# TableUpdate::bind

(No version information available, might only be in Git)

TableUpdate::bind — Vincula parâmetros de consulta de atualização

### Descrição

public function **mysql\_xdevapi\TableUpdate::bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

Vincula um valor a um marcador específico.

### Parâmetros

`placeholder_values`
:   O nome do marcador e o valor a vincular, definidos
    como um array JSON.

### Valor Retornado

Um objeto TableUpdate.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableUpdate::bind()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$table->update()
  ->set('status', 'admin')
  ->where('name = :name and age > :age')
  ->bind(['name' => 'Bernie', 'age' => 2000])
  ->execute();

?>
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
