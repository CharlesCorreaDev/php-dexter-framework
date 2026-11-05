# Verifica se uma coleção existe no banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.existsindatabase.php

---

# Collection::existsInDatabase

(No version information available, might only be in Git)

Collection::existsInDatabase — Verifica se uma coleção existe no banco de dados

### Descrição

public function **mysql\_xdevapi\Collection::existsInDatabase**(): [bool](language.types.boolean.md)

Verifica se o objeto Collection se refere a uma coleção no banco de dados (esquema).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a coleção existir no banco de dados, **`false`** se não existir.

Uma tabela definida com duas colunas (doc e \_id) é considerada uma coleção,
e uma terceira coluna \_json\_schema a partir do MySQL 8.0.21.
Inserir uma coluna adicional significa que existsInDatabase() não mais a verá como uma coleção.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::existsInDatabase()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

// ...

$collection = $schema->getCollection("people");

// ...

if (!$collection->existsInDatabase()) {
    echo "A coleção não existe mais no banco de dados addressbook. O que aconteceu?";
}
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
