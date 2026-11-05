# Obtém valor de incremento automático

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-result.getautoincrementvalue.php

---

# Result::getAutoIncrementValue

(No version information available, might only be in Git)

Result::getAutoIncrementValue — Obtém valor de incremento automático

### Descrição

public function **mysql\_xdevapi\Result::getAutoIncrementValue**(): [int](language.types.integer.md)

Obtém o último valor de AUTO\_INCREMENT (último id de inserção).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O último valor de AUTO\_INCREMENT.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Result::getAutoIncrementValue()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("
  CREATE TABLE addressbook.names
    (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(30), age INT, PRIMARY KEY (id))
  ")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$result = $table->insert("name", "age")->values(["Suzanne", 31],["Julie", 43])->execute();
$result = $table->insert("name", "age")->values(["Suki", 34])->execute();

$ai = $result->getAutoIncrementValue();
var_dump($ai);
?>
```

O exemplo acima produzirá:

```
int(3)
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
