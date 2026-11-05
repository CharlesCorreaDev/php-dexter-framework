# Obtém uma única linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-sqlstatementresult.fetchone.php

---

# SqlStatementResult::fetchOne

(No version information available, might only be in Git)

SqlStatementResult::fetchOne — Obtém uma única linha

### Descrição

public function **mysql\_xdevapi\SqlStatementResult::fetchOne**(): [array](language.types.array.md)

Busca uma linha do conjunto de resultados.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O resultado, como um array associativo. Caso não haja
resultado, será retornado null.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\SqlStatementResult::fetchOne()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS dbtest")->execute();
$session->sql("CREATE DATABASE dbtest")->execute();
$session->sql("CREATE TABLE dbtest.workers(name text, age int, job text)")->execute();
$session->sql("INSERT INTO dbtest.workers values ('John', 42, 'bricklayer'), ('Sam', 33, 'carpenter')")->execute();

$schema = $session->getSchema("dbtest");
$table  = $schema->getTable("workers");

$rows = $session->sql("SELECT * FROM dbtest.workers")->execute()->fetchOne();

print_r($rows);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [name] => John
    [age] => 42
    [job] => bricklayer
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
