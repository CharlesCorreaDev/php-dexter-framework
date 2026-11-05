# Obtém contagem de linhas afetadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-result.getaffecteditemscount.php

---

# Result::getAffectedItemsCount

(No version information available, might only be in Git)

Result::getAffectedItemsCount — Obtém contagem de linhas afetadas

### Descrição

public function **mysql\_xdevapi\Result::getAffectedItemsCount**(): [int](language.types.integer.md)

Obtém o número de linhas afetadas pela operação anterior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número (como um inteiro) de linhas afetadas.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Result::getAffectedItemsCount()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

$collection = $schema->getCollection("people");

$result = $collection->add('{"name": "Wilma", "age": 23, "job": "Teacher"}')->execute();

var_dump( $res->getAffectedItemsCount() );
?>
```

O exemplo acima produzirá:

```
int(1)
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
