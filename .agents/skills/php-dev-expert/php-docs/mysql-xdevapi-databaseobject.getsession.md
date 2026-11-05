# Obtém o nome da sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-databaseobject.getsession.php

---

# DatabaseObject::getSession

(No version information available, might only be in Git)

DatabaseObject::getSession — Obtém o nome da sessão

### Descrição

abstract public function **mysql\_xdevapi\DatabaseObject::getSession**(): [mysql\_xdevapi\Session](class.mysql-xdevapi-session.md)

Busca a sessão associada ao objeto de banco de dados.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O objeto Session.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\DatabaseObject::getSession()****

```
<?php

$session = $dbObj->getSession();

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
