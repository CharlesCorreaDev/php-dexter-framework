# Obtém um documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.getone.php

---

# Collection::getOne

(No version information available, might only be in Git)

Collection::getOne — Obtém um documento

### Descrição

public function **mysql\_xdevapi\Collection::getOne**([string](language.types.string.md) `$id`): Document

Busca um documento da coleção.

É um atalho para:
`Collection.find("_id = :id").bind("id", id).execute().fetchOne();`

### Parâmetros

`id`
:   O \_id do documento na coleção.

### Valor Retornado

O objeto Collection, ou **`null`** se o \_id não corresponder a um documento.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::getOne()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$result = $collection->add('{"name": "Alfred", "age": 42, "job": "Butler"}')->execute();

// Um _id único é gerado pelo servidor MySQL (por padrão, e recomendado)
// Isto recupera os ids gerados; somente um neste exemplo, $ids[0]
$ids        = $result->getGeneratedIds();
$alfreds_id = $ids[0];

// ...

print_r($alfreds_id);
print_r($collection->getOne($alfreds_id));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
00005b6b536100000000000000b1

Array
(
    [_id] => 00005b6b536100000000000000b1
    [age] => 42
    [job] => Butler
    [name] => Alfred
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
