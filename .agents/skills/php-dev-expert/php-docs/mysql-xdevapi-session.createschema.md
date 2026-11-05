# Cria novo esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-session.createschema.php

---

# Session::createSchema

(No version information available, might only be in Git)

Session::createSchema — Cria novo esquema

### Descrição

public function **mysql\_xdevapi\Session::createSchema**([string](language.types.string.md) `$schema_name`): [mysql\_xdevapi\Schema](class.mysql-xdevapi-schema.md)

Cria um novo esquema.

### Parâmetros

`schema_name`
:   Nome do esquema a ser criado.

### Valor Retornado

Um objeto Schema em caso de sucesso e emite uma exceção em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Session::createSchema()****

```
<?php
$uri  = 'mysqlx://happyuser:password@127.0.0.1:33060/';
$sess = mysql_xdevapi\getSession($uri);

try {

    if ($schema = $sess->createSchema('fruit')) {
        echo "Info: Eu criei um esquema de nome 'fruit'\n";
    }

} catch (Exception $e) {

   echo $e->getMessage();

}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Info: Eu criei um esquema de nome 'fruit'
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
