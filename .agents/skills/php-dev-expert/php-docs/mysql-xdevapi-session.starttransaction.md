# Inicia transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.starttransaction.php

---

# Session::startTransaction

(No version information available, might only be in Git)

Session::startTransaction — Inicia transação

### Descrição

public function **mysql\_xdevapi\Session::startTransaction**(): [void](language.types.void.md)

Inicia uma nova transação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto SqlStatementResult.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::startTransaction()****

```
<?php
$session    = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$collection = $session->getSchema("addressbook")->getCollection("friends");

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
