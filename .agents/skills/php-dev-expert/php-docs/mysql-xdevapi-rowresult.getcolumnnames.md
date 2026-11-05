# Obtém o nome de todas as colunas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-rowresult.getcolumnnames.php

---

# RowResult::getColumnNames

(No version information available, might only be in Git)

RowResult::getColumnNames — Obtém o nome de todas as colunas

### Descrição

public function **mysql\_xdevapi\RowResult::getColumnNames**(): [array](language.types.array.md)

Recupera os nomes das colunas presentes no conjunto de resultados.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array numérico de nomes de colunas da tabela,
ou um array vazio se o conjunto de resultados estiver vazio.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\RowResult::getColumnNames()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE addressbook")->execute();
$session->sql("CREATE DATABASE foo")->execute();
$session->sql("CREATE TABLE foo.test_table(x int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$sql = $session->sql("SELECT * from addressbook.names")->execute();

$colnames = $sql->getColumnNames();

print_r($colnames);
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => name
    [1] => age
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
