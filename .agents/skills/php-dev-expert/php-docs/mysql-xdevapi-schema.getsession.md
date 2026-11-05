# Obtém a sessão do esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schema.getsession.php

---

# Schema::getSession

(No version information available, might only be in Git)

Schema::getSession — Obtém a sessão do esquema

### Descrição

public function **mysql\_xdevapi\Schema::getSession**(): [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md)

Obtém um novo objeto Session a partir do objeto Schema.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto Session.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Schema::getSession()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema  = $session->getSchema("addressbook");

// ...

$newsession = $schema->getSession();

var_dump($session);
var_dump($newsession);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(mysql_xdevapi\Session)#1 (0) {
}

object(mysql_xdevapi\Session)#3 (0) {
}
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
