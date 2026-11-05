# Obtém o objeto de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.getsession.php

---

# Collection::getSession

(No version information available, might only be in Git)

Collection::getSession — Obtém o objeto de sessão

### Descrição

public function **mysql\_xdevapi\Collection::getSession**(): Session

Obtém um novo objeto Session do objeto Collection.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto Session.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::getSession()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

// ...

$newsession = $collection->getSession();

var_dump($session);
var_dump($newsession);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(mysql_xdevapi\Session)#1 (0) {
}
object(mysql_xdevapi\Session)#4 (0) {
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
