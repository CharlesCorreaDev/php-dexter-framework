# Verifica se existe no banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.existsindatabase.php

---

# Schema::existsInDatabase

(No version information available, might only be in Git)

Schema::existsInDatabase — Verifica se existe no banco de dados

### Descrição

public function **mysql\_xdevapi\Schema::existsInDatabase**(): [bool](language.types.boolean.md)

Verifica se o objeto atual (esquema, tabela, coleção ou visualização) existe
no objeto Schema.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o esquema, tabela, coleção ou visualização ainda existirem no banco de dados, senão **`false`**.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::existsInDatabase()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS food")->execute();
$session->sql("CREATE DATABASE food")->execute();
$session->sql("CREATE TABLE food.fruit(name text, rating text)")->execute();

$schema = $session->getSchema("food");
$schema->createCollection("trees");

// ...

$trees = $schema->getCollection("trees");

// ...

// Esta coleção ainda existe no banco de dados (esquema)?
if ($trees->existsInDatabase()) {
    echo "Sim, a coleção 'trees' ainda está presente.";
}
```

O exemplo acima produzirá
algo semelhante a:

```
Sim, a coleção 'trees' ainda está presente.
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
