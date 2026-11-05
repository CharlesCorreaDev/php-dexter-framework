# Obtém o nome da coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.getname.php

---

# Collection::getName

(No version information available, might only be in Git)

Collection::getName — Obtém o nome da coleção

### Descrição

public function **mysql\_xdevapi\Collection::getName**(): [string](language.types.string.md)

Recupera o nome da coleção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome da coleção, como uma string.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::getName()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

// ...

var_dump($collection->getName());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(6) "people"
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
