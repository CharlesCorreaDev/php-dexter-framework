# Obtém o nome do esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.getname.php

---

# Schema::getName

(No version information available, might only be in Git)

Schema::getName — Obtém o nome do esquema

### Descrição

public function **mysql\_xdevapi\Schema::getName**(): [string](language.types.string.md)

Obtém o nome do esquema.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome do esquema conectado ao objeto Schema, como uma string.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::getName()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema  = $session->getSchema("addressbook");

// ...

var_dump($schema->getName());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(11) "addressbook"
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
