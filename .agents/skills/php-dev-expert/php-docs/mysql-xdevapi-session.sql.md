# Cria consulta SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.sql.php

---

# Session::sql

(No version information available, might only be in Git)

Session::sql — Cria consulta SQL

### Descrição

public function **mysql\_xdevapi\Session::sql**([string](language.types.string.md) `$query`): [mysql\_xdevapi\SqlStatement](class.mysql-xdevapi-sqlstatement.md)

Cria uma instrução SQL nativa. Marcadores são suportados usando a sintaxe nativa "?".
Use o método `execute` para executar a instrução SQL.

### Parâmetros

`query`
:   Instrução SQL a executar.

### Valor Retornado

Um objeto SqlStatement.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::sql()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("CREATE DATABASE addressbook")->execute();
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
