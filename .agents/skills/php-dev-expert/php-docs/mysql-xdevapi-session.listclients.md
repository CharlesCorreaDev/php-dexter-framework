# Obtém a lista de clientes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.listclients.php

---

# Session::listClients

(No version information available, might only be in Git)

Session::listClients — Obtém a lista de clientes

### Descrição

public function **mysql\_xdevapi\Session::listClients**(): [array](language.types.array.md)

Obtém uma lista de conexões de clientes ao servidor MySQL da sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array contendo os clientes atualmente registrados. Os elementos do
array são "client\_id", "user", "host", e "sql\_session".

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::listClients()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$ids = $session->listClients();

var_dump($ids);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [0]=>
  array(4) {
    ["client_id"]=>
    int(61)
    ["user"]=>
    string(4) "root"
    ["host"]=>
    string(9) "localhost"
    ["sql_session"]=>
    int(72)
  }
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
