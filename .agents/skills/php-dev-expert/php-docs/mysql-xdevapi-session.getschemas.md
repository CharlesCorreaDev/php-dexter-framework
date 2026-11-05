# Obtém os esquemas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.getschemas.php

---

# Session::getSchemas

(No version information available, might only be in Git)

Session::getSchemas — Obtém os esquemas

### Descrição

public function **mysql\_xdevapi\Session::getSchemas**(): [array](language.types.array.md)

Obtém os objetos de esquema para todos os esquemas disponíveis para a sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array contendo objetos que representam todos os esquemas
disponíveis para a sessão.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::getSchemas()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$schemas  = $session->getSchemas();

print_r($schemas);
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => mysql_xdevapi\Schema Object
        (
            [name] => addressbook
        )
    [1] => mysql_xdevapi\Schema Object
        (
            [name] => information_schema
        )
    ...
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
