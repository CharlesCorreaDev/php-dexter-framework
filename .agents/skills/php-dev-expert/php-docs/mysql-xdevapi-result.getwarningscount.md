# Obtém contagem de alertas da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-result.getwarningscount.php

---

# Result::getWarningsCount

(No version information available, might only be in Git)

Result::getWarningsCount — Obtém contagem de alertas da última operação

### Descrição

public function **mysql\_xdevapi\Result::getWarningsCount**(): [int](language.types.integer.md)

Obtém o número de alertas da última operação Result.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de alertas gerados pela última operação.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\RowResult::getWarningsCount()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS foo")->execute();
$session->sql("CREATE DATABASE foo")->execute();
$session->sql("CREATE TABLE foo.test_table(x int)")->execute();

$schema = $session->getSchema("foo");
$table  = $schema->getTable("test_table");

$table->insert(['x'])->values([1])->values([2])->execute();

$res = $table->select(['x/0 as bad_x'])->execute();

echo $res->getWarningsCount();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
2
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
