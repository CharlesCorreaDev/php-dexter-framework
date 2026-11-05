# Cria ponto de gravação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.setsavepoint.php

---

# Session::setSavepoint

(No version information available, might only be in Git)

Session::setSavepoint — Cria ponto de gravação

### Descrição

public function **mysql\_xdevapi\Session::setSavepoint**([string](language.types.string.md) `$name` = ?): [string](language.types.string.md)

Cria um novo ponto de gravação para a transação.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`name`
:   O nome do ponto de gravação. O nome é gerado automaticamente se o parâmetro `name`
    opcional não for definido, como 'SAVEPOINT1', 'SAVEPOINT2' e assim por diante.

### Valor Retornado

O nome do ponto de gravação.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::setSavepoint()****

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
