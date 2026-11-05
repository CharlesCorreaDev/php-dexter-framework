# Executa instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-executable.execute.php

---

# Executable::execute

(No version information available, might only be in Git)

Executable::execute — Executa instrução

### Descrição

abstract public function **mysql\_xdevapi\Executable::execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

Executa a instrução a partir de uma operação de coleção ou uma consulta de tabela;
esta funcionalidade permite encadeamento de métodos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um dos objetos Result, tal como Result ou SqlStatementResult.

### Examples

**Exemplo #1 Exemplos de execute()**

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE IF EXISTS addressbook")->execute();
$result_sql = $session->sql("CREATE DATABASE addressbook")->execute();

var_dump($result_sql);

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("humans");

$result_collection = $collection->add(
  '{"name": "Jane",
    "jobs": [{"title":"Scientist","Salary":18000}, {"title":"Mother","Salary":0}],
    "hobbies": ["Walking","Making pies"]}');

$result_collection_executed = $result_collection->execute();

var_dump($result_collection);
var_dump($result_collection_executed);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(mysql_xdevapi\SqlStatementResult)#3 (0) {
}

object(mysql_xdevapi\CollectionAdd)#5 (0) {
}

object(mysql_xdevapi\Result)#7 (0) {
}
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
