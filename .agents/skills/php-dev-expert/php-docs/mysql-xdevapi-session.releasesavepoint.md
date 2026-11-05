# Libera o ponto de gravação definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.releasesavepoint.php

---

# Session::releaseSavepoint

(No version information available, might only be in Git)

Session::releaseSavepoint — Libera o ponto de gravação definido

### Descrição

public function **mysql\_xdevapi\Session::releaseSavepoint**([string](language.types.string.md) `$name`): [void](language.types.void.md)

Libera um ponto de gravação previamente definido.

### Parâmetros

`name`
:   Nome do ponto de gravação a liberar.

### Valor Retornado

Um objeto SqlStatementResult.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::releaseSavepoint()****

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
