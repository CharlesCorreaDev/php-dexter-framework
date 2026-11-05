# Remove coleção do esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.dropcollection.php

---

# Schema::dropCollection

(No version information available, might only be in Git)

Schema::dropCollection — Remove coleção do esquema

### Descrição

public function **mysql\_xdevapi\Schema::dropCollection**([string](language.types.string.md) `$collection_name`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`collection_name`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::dropCollection()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS food")->execute();
$session->sql("CREATE DATABASE food")->execute();
$session->sql("CREATE TABLE food.fruit(name text, rating text)")->execute();

$schema = $session->getSchema("food");

$schema->createCollection("trees");
$schema->dropCollection("trees");
$schema->createCollection("buildings");

print_r($schema->gettables());
print_r($schema->getcollections());
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [fruit] => mysql_xdevapi\Table Object
        (
            [name] => fruit
        )
)
Array
(
    [buildings] => mysql_xdevapi\Collection Object
        (
            [name] => buildings
        )
)
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
