# Obtém o objeto de esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.getschema.php

---

# Collection::getSchema

(No version information available, might only be in Git)

Collection::getSchema — Obtém o objeto de esquema

### Descrição

public function **mysql\_xdevapi\Collection::getSchema**(): Schema Object

Recupera o objeto de esquema que contém a coleção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O objeto de esquema em caso de sucesso, ou **`null`** se o objeto não puder ser recuperado
para a coleção informada.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::getSchema()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

var_dump($collection->getSchema());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(mysql_xdevapi\Schema)#9 (1) {
  ["name"]=>
  string(11) "addressbook"
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
