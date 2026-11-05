# Limita contagem de atualização de linhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableupdate.limit.php

---

# TableUpdate::limit

(No version information available, might only be in Git)

TableUpdate::limit — Limita contagem de atualização de linhas

### Descrição

public function **mysql\_xdevapi\TableUpdate::limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

Define o número máximo de registros ou documentos atualizados.

### Parâmetros

`rows`
:   O número máximo de registros ou documentos a atualizar.

### Valor Retornado

Um objeto TableUpdate.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableUpdate::limit()****

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
