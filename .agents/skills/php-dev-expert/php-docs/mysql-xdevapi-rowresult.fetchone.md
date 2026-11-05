# Obtém linha do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-rowresult.fetchone.php

---

# RowResult::fetchOne

(No version information available, might only be in Git)

RowResult::fetchOne — Obtém linha do resultado

### Descrição

public function **mysql\_xdevapi\RowResult::fetchOne**(): [array](language.types.array.md)

Busca um resultado do conjunto de resultados.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O resultado, como um array associativo
ou **`null`** se nenhum resultado estiver presente.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\RowResult::fetchOne()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();
$session->sql("CREATE TABLE addressbook.names(name text, age int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$schema = $session->getSchema("addressbook");
$table  = $schema->getTable("names");

$row = $table->select('name', 'age')->where('age < 40')->execute()->fetchOne();

print_r($row);
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [name] => Sam
    [age] => 33
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
