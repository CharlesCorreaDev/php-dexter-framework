# Verifica se um objeto existe em um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-databaseobject.existsindatabase.php

---

# DatabaseObject::existsInDatabase

(No version information available, might only be in Git)

DatabaseObject::existsInDatabase — Verifica se um objeto existe em um banco de dados

### Descrição

abstract public function **mysql\_xdevapi\DatabaseObject::existsInDatabase**(): [bool](language.types.boolean.md)

Verifica se o objeto se refere a um que exista no banco de dados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o objeto existe no banco de dados ou **`false`** se não existe.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\DatabaseObject::existsInDatabase()****

```
<?php

$existInDb = $dbObj->existsInDatabase();

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
