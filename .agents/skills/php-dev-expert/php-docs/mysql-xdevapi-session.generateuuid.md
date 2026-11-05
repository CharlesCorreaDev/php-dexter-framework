# Obtém novo UUID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.generateuuid.php

---

# Session::generateUUID

(No version information available, might only be in Git)

Session::generateUUID — Obtém novo UUID

### Descrição

public function **mysql\_xdevapi\Session::generateUUID**(): [string](language.types.string.md)

Gera um Identificador Único Universal (UUID) de acordo com a
[» RFC 4122](https://datatracker.ietf.org/doc/html/rfc4122).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O UUID; uma string com comprimento de 32 bytes.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::generateUuid()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$uuid = $session->generateUuid();

var_dump($uuid);
```

O exemplo acima produzirá
algo semelhante a:

```
string(32) "484B18AC7980F8D4FE84613CDA5EE84B"
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
