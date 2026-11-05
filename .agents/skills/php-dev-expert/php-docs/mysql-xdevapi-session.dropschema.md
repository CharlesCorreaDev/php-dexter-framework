# Remove um esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.dropschema.php

---

# Session::dropSchema

(No version information available, might only be in Git)

Session::dropSchema — Remove um esquema

### Descrição

public function **mysql\_xdevapi\Session::dropSchema**([string](language.types.string.md) `$schema_name`): [bool](language.types.boolean.md)

Remove um esquema (banco de dados).

### Parâmetros

`schema_name`
:   Nome do esquema a remover.

### Valor Retornado

**`true`** se o esquema for removido ou **`false`** se ele não exisitir
ou não puder ser removido.

Um erro de nível **`E_WARNING`** é gerado se o
esquema não existir.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::dropSchema()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->dropSchema("addressbook");

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
