# Obtém a contagem de colunas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-rowresult.getcolumncount.php

---

# RowResult::getColumnsCount

(No version information available, might only be in Git)

RowResult::getColumnsCount — Obtém a contagem de colunas

### Descrição

public function **mysql\_xdevapi\RowResult::getColumnsCount**(): [int](language.types.integer.md)

Recupera a contagem de colunas presentes no conjunto de resultados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de colunas; 0 se não houver nenhuma.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.14 | Método renomeado de getColumnCount() para getColumnsCount(). |

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\RowResult::getColumnsCount()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$session->sql("DROP DATABASE addressbook")->execute();
$session->sql("CREATE DATABASE foo")->execute();
$session->sql("CREATE TABLE foo.test_table(x int)")->execute();
$session->sql("INSERT INTO addressbook.names values ('John', 42), ('Sam', 33)")->execute();

$sql = $session->sql("SELECT * from addressbook.names")->execute();

echo $sql->getColumnsCount();
```

O exemplo acima produzirá
algo semelhante a:

```
2
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
