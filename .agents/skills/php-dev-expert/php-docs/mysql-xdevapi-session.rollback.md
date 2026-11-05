# Reverte a transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.rollback.php

---

# Session::rollback

(No version information available, might only be in Git)

Session::rollback — Reverte a transação

### Descrição

public function **mysql\_xdevapi\Session::rollback**(): [void](language.types.void.md)

Reverte a transação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto SqlStatementResult.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::rollback()****

```
<?php
$session    = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$collection = $session->getSchema("addressbook")->getCollection("names");

$session->startTransaction();
$collection->add( '{"test1":1, "test2":2}' )->execute();

$savepoint = $session->setSavepoint();

$collection->add( '{"test3":3, "test4":4}' )->execute();

$session->releaseSavepoint($savepoint);
$session->rollback();
?>
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
