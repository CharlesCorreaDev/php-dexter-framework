# Obtém a versão do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.getserverversion.php

---

# Session::getServerVersion

(No version information available, might only be in Git)

Session::getServerVersion — Obtém a versão do servidor

### Descrição

public function **mysql\_xdevapi\Session::getServerVersion**(): [int](language.types.integer.md)

Recupera a versão do servidor MySQL para a sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A versão do servidor MySQL para a sessão, como um inteiro tipo "80012".

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::getServerVersion()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$version = $session->getServerVersion();

var_dump($version);
```

O exemplo acima produzirá
algo semelhante a:

```
int(80012)
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
