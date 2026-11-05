# Obtém tabelas do esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.gettables.php

---

# Schema::getTables

(No version information available, might only be in Git)

Schema::getTables — Obtém tabelas do esquema

### Descrição

public function **mysql\_xdevapi\Schema::getTables**(): [array](language.types.array.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Array de todas as tabelas do esquema, onde cada elemento
tem um objeto Table como valor e o nome da tabela como chave.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::getTables()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$session->sql("CREATE TABLE addressbook.cities(name text, population int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('Portland', 639863), ('Seattle', 704352)")->execute();

$schema = $session->getSchema("addressbook");
$tables = $schema->getTables();

var_dump($tables);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["cities"]=>
  object(mysql_xdevapi\Table)#3 (1) {
    ["name"]=>
    string(6) "cities"
  }

  ["names"]=>
  object(mysql_xdevapi\Table)#4 (1) {
    ["name"]=>
    string(5) "names"
  }
}
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
