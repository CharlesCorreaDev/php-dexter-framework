# Adiciona campo a ser atualizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableupdate.set.php

---

# TableUpdate::set

(No version information available, might only be in Git)

TableUpdate::set — Adiciona campo a ser atualizado

### Descrição

public function **mysql\_xdevapi\TableUpdate::set**([string](language.types.string.md) `$table_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

Atualiza valor da coluna nos registros em uma tabela.

### Parâmetros

`table_field`
:   O nome da coluna a ser atualizada.

`expression_or_literal`
:   O valor a ser definido na coluna especificada.

### Valor Retornado

Um objeto TableUpdate.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableUpdate::set()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$res = $table->update()
  ->set('level', 3)
  ->where('age > 15 and age < 22')
  ->limit(4)
  ->orderby(['age asc','name desc'])
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
