# Obtém alertas da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-docresult.getwarnings.php

---

# DocResult::getWarnings

(No version information available, might only be in Git)

DocResult::getWarnings — Obtém alertas da última operação

### Descrição

public function **mysql\_xdevapi\DocResult::getWarnings**(): [Array](language.types.array.md)

Busca alertas gerados pela última operação do servidor MySQL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array contendo objetos Warning da última operação. Cada objeto
define uma mensagem de erro ('message'), um nível de erro ('level') e um código de erro ('code'). Um array
vazio é retornado se nenhum erro tiver ocorrido.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\DocResult::getWarnings()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");
$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$session->sql("CREATE DATABASE addressbook")->execute();

$schema = $session->getSchema("addressbook");
$create = $schema->createCollection("people");

$create->add('{"name": "Alfred", "age": 18, "job": "Butler"}')->execute();
$create->add('{"name": "Reginald", "age": 42, "job": "Butler"}')->execute();

// ...

$collection = $schema->getCollection("people");

// Gera um objeto DocResult
$result = $collection
  ->find('job like :job and age > :age')
  ->bind(['job' => 'Butler', 'age' => 16])
  ->sort('age desc')
  ->execute();

if (!$result->getWarningsCount()) {
    echo "Ocorreu um erro:\n";
    print_r($result->getWarnings());
    exit;
}

var_dump($result->fetchOne());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ocorreu um erro:

Array
(
    [0] => mysql_xdevapi\Warning Object
        (
            [message] => Algo de errado
            [level] => 2
            [code] => 1365
        )
    [1] => mysql_xdevapi\Warning Object
        (
            [message] => Algo de errado
            [level] => 2
            [code] => 1365
        )
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
