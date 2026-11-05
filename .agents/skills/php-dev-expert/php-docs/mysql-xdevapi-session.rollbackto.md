# Reverte a transação para um ponto de gravação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.rollbackto.php

---

# Session::rollbackTo

(No version information available, might only be in Git)

Session::rollbackTo — Reverte a transação para um ponto de gravação

### Descrição

public function **mysql\_xdevapi\Session::rollbackTo**([string](language.types.string.md) `$name`): [void](language.types.void.md)

Reverte a transação para o ponto de gravação.

### Parâmetros

`name`
:   Nome do ponto de gravação para o qual a reversão ocorrerá; insensível a maiúsculas/minúsculas.

### Valor Retornado

Um objeto SqlStatementResult.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::rollbackTo()****

```
<?php
$session    = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$collection = $session->getSchema("addressbook")->getCollection("names");

$session->startTransaction();
$collection->add( '{"test1":1, "test2":2}' )->execute();

$savepoint1 = $session->setSavepoint();

$collection->add( '{"test3":3, "test4":4}' )->execute();

$savepoint2 = $session->setSavepoint();

$session->rollbackTo($savepoint1);
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
