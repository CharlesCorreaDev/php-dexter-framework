# Remove documentos da coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.remove.php

---

# Collection::remove

(No version information available, might only be in Git)

Collection::remove — Remove documentos da coleção

### Descrição

public function **mysql\_xdevapi\Collection::remove**([string](language.types.string.md) `$search_condition`): [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md)

Remove documentos de uma coleção que se encaixam em condições específicas de pesquisa.
Múltiplas operações são permitidas e a vinculação de parâmetros é suportada.

### Parâmetros

`search_condition`
:   Precisa ser uma expressão SQL válida usada para corresponder aos documentos que serão modificados.
    Esta expressão pode ser tão simples como **`true`**, que corresponde a todos os
    documentos, ou pode conter funções e operações como
    `'CAST(_id AS SIGNED) >= 10'`,
    `'age MOD 2 = 0 OR age MOD 3 = 0'` ou
    `'_id IN ["2","5","7","10"]'`.

### Valor Retornado

Se a operação não for executada, a função retornará
um objeto Remove que pode ser usado para inserir operações
de remoção adicionais.

Se a operação de remoção for executada, o objeto retornado conterá
o resultado da operação.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::remove()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$collection->add('{"name": "Alfred", "age": 18, "job": "Butler"}')->execute();
$collection->add('{"name": "Bob",    "age": 19, "job": "Painter"}')->execute();

// Remove todos os 'painters'
$collection
  ->remove("job in ('Painter')")
  ->execute();

// Remove o 'butler' mais antigo (maior 'age')
$collection
  ->remove("job in ('Butler')")
  ->sort('age desc')
  ->limit(1)
  ->execute();

// Remove o registro com maior 'age'
$collection
  ->remove('true')
  ->sort('age desc')
  ->limit(1)
  ->execute();
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
