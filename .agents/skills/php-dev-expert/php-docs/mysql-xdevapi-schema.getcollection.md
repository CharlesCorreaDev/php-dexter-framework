# Obtém coleção do esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.getcollection.php

---

# Schema::getCollection

(No version information available, might only be in Git)

Schema::getCollection — Obtém coleção do esquema

### Descrição

public function **mysql\_xdevapi\Schema::getCollection**([string](language.types.string.md) `$name`): [mysql\_xdevapi\Collection](class.mysql-xdevapi-collection.md)

Obtém uma coleção do esquema.

### Parâmetros

`name`
:   Nome da coleção a ser obtida.

### Valor Retornado

O objeto Collection para a coleção selecionada.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::getCollection()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS food")->execute();
$session->sql("CREATE DATABASE food")->execute();

$schema = $session->getSchema("food");
$schema->createCollection("trees");

// ...

$trees = $schema->getCollection("trees");

var_dump($trees);
```

O exemplo acima produzirá
algo semelhante a:

```
object(mysql_xdevapi\Collection)#3 (1) {
  ["name"]=>
  string(5) "trees"
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
