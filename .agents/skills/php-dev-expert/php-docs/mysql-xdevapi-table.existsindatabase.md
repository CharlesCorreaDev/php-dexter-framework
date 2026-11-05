# Verifica se uma tabela existe no banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-table.existsindatabase.php

---

# Table::existsInDatabase

(No version information available, might only be in Git)

Table::existsInDatabase — Verifica se uma tabela existe no banco de dados

### Descrição

public function **mysql\_xdevapi\Table::existsInDatabase**(): [bool](language.types.boolean.md)

Verifica se esta tabela existe no banco de dados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a tabela existir no banco de dados, ou **`false`** se não existir.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Table::existsInDatabase()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

if ($table->existsInDatabase()) {
  echo "Sim, esta tabela ainda existe no esquema da sessão.";
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Sim, esta tabela ainda existe no esquema da sessão.
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
