# Obtém os alertas da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-rowresult.getwarnings.php

---

# RowResult::getWarnings

(No version information available, might only be in Git)

RowResult::getWarnings — Obtém os alertas da última operação

### Descrição

public function **mysql\_xdevapi\RowResult::getWarnings**(): [array](language.types.array.md)

Recupera os alertas da última operação de RowResult.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de objetos Warning da última operação. Cada objeto
define uma mensagem de erro (chave 'message'), um nível de erro (chave 'level') e um código de erro (chave 'code'). Um array
vazio é retornado se nenhum erro estiver presente.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\RowResult::getWarnings()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("CREATE DATABASE foo")->execute();
$session->sql("CREATE TABLE foo.test_table(x int)")->execute();

$schema = $session->getSchema("foo");
$table  = $schema->getTable("test_table");

$table->insert(['x'])->values([1])->values([2])->execute();

$res = $table->select(['x/0 as bad_x'])->execute();
$warnings = $res->getWarnings();

print_r($warnings);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => mysql_xdevapi\Warning Object
        (
            [message] => Division by 0
            [level] => 2
            [code] => 1365
        )
    [1] => mysql_xdevapi\Warning Object
        (
            [message] => Division by 0
            [level] => 2
            [code] => 1365
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
