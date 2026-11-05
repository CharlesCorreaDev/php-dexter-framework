# Executa EXCLUSIVE LOCK

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-tableselect.lockexclusive.php

---

# TableSelect::lockExclusive

(No version information available, might only be in Git)

TableSelect::lockExclusive — Executa EXCLUSIVE LOCK

### Descrição

public function **mysql\_xdevapi\TableSelect::lockExclusive**([int](language.types.integer.md) `$lock_waiting_option` = ?): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

Executa uma operação de leitura com EXCLUSIVE LOCK. Somente uma trava pode estar ativa no mesmo momento.

### Parâmetros

`lock_waiting_option`
:   Espera opcional cujo padrão é **`MYSQLX_LOCK_DEFAULT`**.
    Valores válidos são:

    - **`MYSQLX_LOCK_DEFAULT`**
    - **`MYSQLX_LOCK_NOWAIT`**
    - **`MYSQLX_LOCK_SKIP_LOCKED`**

### Valor Retornado

Objeto TableSelect.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\TableSelect::lockExclusive()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$session->startTransaction();

$result = $table->select('name', 'age')
  ->lockExclusive(MYSQLX_LOCK_NOWAIT)
  ->execute();

$session->commit();

$row = $result->fetchAll();
print_r($row);
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
            [age] => 42
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
