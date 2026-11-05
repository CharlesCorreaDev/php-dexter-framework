# Modifica documentos da coleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collection.modify.php

---

# Collection::modify

(No version information available, might only be in Git)

Collection::modify — Modifica documentos da coleção

### Descrição

public function **mysql\_xdevapi\Collection::modify**([string](language.types.string.md) `$search_condition`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Modifica os documentos de uma coleção que se encaixam em condições específicas de pesquisa.
Múltiplas operações são permitidas e a vinculação de parâmetros
é suportada.

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
um objeto Modify que pode ser usado para inserir operações
adicionais de modificação.

Se a operação de modificação for executada, o objeto retornado conterá
o resultado da operação.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Collection::modify()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$collection->add('{"name": "Alfred", "age": 18, "job": "Butler"}')->execute();
$collection->add('{"name": "Bob",    "age": 19, "job": "Painter"}')->execute();

// Adiciona dois novos 'jobs' para todos os 'Painters': 'Artist' e 'Crafter'
$collection
  ->modify("job in ('Butler', 'Painter')")
  ->arrayAppend('job', 'Artist')
  ->arrayAppend('job', 'Crafter')
  ->execute();

// Remove o campo 'beer' de todos os documentos com a idade (age) menor que 21
$collection
  ->modify('age < 21')
  ->unset(['beer'])
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
