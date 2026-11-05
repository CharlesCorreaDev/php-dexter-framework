# Construtor de Description

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.construct.php

---

# Session::\_\_construct

(No version information available, might only be in Git)

Session::\_\_construct — Construtor de Description

### Descrição

private function **mysql\_xdevapi\Session::\_\_construct**()

Um objeto Session, iniciado por getSession().

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::\_\_construct()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->close();
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
