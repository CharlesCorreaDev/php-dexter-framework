# Obtém todas as linhas do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-sqlstatementresult.fetchall.php

---

# SqlStatementResult::fetchAll

(No version information available, might only be in Git)

SqlStatementResult::fetchAll — Obtém todas as linhas do resultado

### Descrição

public function **mysql\_xdevapi\SqlStatementResult::fetchAll**(): [array](language.types.array.md)

Busca todas as linhas do conjunto de resultados.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array numérico com todos os resultados da consulta; cada resultado é
um array associativo. Um array vazio é retornado se nenhuma
linha estiver presente.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\SqlStatementResult::fetchAll()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS dbtest")->execute();
$session->sql("CREATE DATABASE dbtest")->execute();
$session->sql("CREATE TABLE dbtest.workers(name text, age int, job text)")->execute();
$session->sql("INSERT INTO dbtest.workers values ('John', 42, 'bricklayer'), ('Sam', 33, 'carpenter')")->execute();

$schema = $session->getSchema("dbtest");
$table  = $schema->getTable("workers");

$rows = $session->sql("SELECT * FROM dbtest.workers")->execute()->fetchAll();

print_r($rows);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [name] => John
            [age] => 42
        )
    [1] => Array
        (
            [name] => Sam
            [age] => 33
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
