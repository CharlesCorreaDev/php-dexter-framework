# Fecha sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.close.php

---

# Session::close

(No version information available, might only be in Git)

Session::close — Fecha sessão

### Descrição

public function **mysql\_xdevapi\Session::close**(): [bool](language.types.boolean.md)

Fecha a sessão com o servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a sessão for fechada.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::close()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

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
