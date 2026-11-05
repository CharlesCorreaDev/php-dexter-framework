# Obtém um novo objeto de esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.getschema.php

---

# Session::getSchema

(No version information available, might only be in Git)

Session::getSchema — Obtém um novo objeto de esquema

### Descrição

public function **mysql\_xdevapi\Session::getSchema**([string](language.types.string.md) `$schema_name`): [mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md)

Um novo objeto Schema para o nome de esquema informado.

### Parâmetros

`schema_name`
:   Nome do esquema (banco de dados) para buscar um objeto Schema.

### Valor Retornado

Um objeto Schema.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::getSchema()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$schema  = $session->getSchema("addressbook");

print_r($schema);
```

O exemplo acima produzirá
algo semelhante a:

```
mysql_xdevapi\Schema Object
(
    [name] => addressbook
)
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
