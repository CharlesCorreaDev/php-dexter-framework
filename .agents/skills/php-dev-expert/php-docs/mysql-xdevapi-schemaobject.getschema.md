# Obtém o objeto do esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-schemaobject.getschema.php

---

# SchemaObject::getSchema

(No version information available, might only be in Git)

SchemaObject::getSchema — Obtém o objeto do esquema

### Descrição

abstract function **mysql\_xdevapi\SchemaObject::getSchema**(): [mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md)

Usado por outros objetos para recuperar um objeto de esquema.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O objeto Schema atual.

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
