# Confirma a transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.commit.php

---

# Session::commit

(PHP 4 >= 4.4.0, PHP 5, PHP 7, PHP 8)

Session::commit — Confirma a transação

### Descrição

public function **mysql\_xdevapi\Session::commit**(): [Object](language.types.object.md)

Confirma a transação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto SqlStatementResult.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::commit()****

```
<?php
$session    = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$collection = $session->getSchema("addressbook")->getCollection("friends");

$session->startTransaction();

$collection->add('{"John":42, "Sam":33}')->execute();
$savepoint = $session->setSavepoint();

$session->commit();
$session->close();
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
