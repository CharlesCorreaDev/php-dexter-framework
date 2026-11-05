# Obtém o nome de esquema padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.getdefaultschema.php

---

# Session::getDefaultSchema

(No version information available, might only be in Git)

Session::getDefaultSchema — Obtém o nome de esquema padrão

### Descrição

public function **mysql\_xdevapi\Session::getDefaultSchema**(): [?](language.types.null.md)[mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md)

Recupera o esquema padrão que é tipicamente definido na URI de conexão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Esquema padrão definido pela conexão ou **`null`** se nenhum foi definido.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::getSchema()****

```
<?php
$uri = "mysqlx://testuser:testpasswd@localhost:33160/testx?ssl-mode=disabled";
$session = mysql_xdevapi\getSession($uri);

$schema = $session->getDefaultSchema();
echo $schema->getName();
?>
```

O exemplo acima produzirá:

```
testx
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
