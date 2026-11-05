# Adiciona coleção ao esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.createcollection.php

---

# Schema::createCollection

(No version information available, might only be in Git)

Schema::createCollection — Adiciona coleção ao esquema

### Descrição

public function **mysql\_xdevapi\Schema::createCollection**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$validate` = ?): [mysql\_xdevapi\Collection](class.mysql-xdevapi-collection.md)

Cria uma coleção dentro do esquema.

### Parâmetros

`name`
:   Nome da coleção.

`validate`
:   Definição de validação, como um objeto JSON.

### Valor Retornado

O objeto Collection.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.20 | Adicionado o parâmetro opcional de validação. |

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::createCollection()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS food")->execute();
$session->sql("CREATE DATABASE food")->execute();
$session->sql("CREATE TABLE food.fruit(name text, rating text)")->execute();

$schema = $session->getSchema("food");
$schema->createCollection("trees");

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
    [trees] => mysql_xdevapi\Collection Object
        (
            [name] => trees
        )
)
```

**Exemplo #2 Exemplo de **mysql\_xdevapi\Schema::createCollection()****

```
<?php
 $collection = $schema->createCollection("minha_coleção", '{
    "validation": {
        "level": "strict",
        "schema": {
            "id": "http://json-schema.org/geo",
            "description": "Uma coordenada geográfica",
            "type": "object",
            "properties": {
                "latitude": {
                    "type": "number"
                },
                "longitude": {
                    "type": "number"
                }
            },
            "required": ["latitude", "longitude"]
        }
    }
}');
// Irá funcionar
$collection->add('{"latitude": 10, "longitude": 20}')->execute();

// Irá falhar, tipos inválidos (não são números)
$collection->add('{"latitude": "lat", "longitude": "long"}')->execute();
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
