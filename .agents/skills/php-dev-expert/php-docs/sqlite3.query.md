# Executa uma consulta SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.query.php

---

# SQLite3::query

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::query — Executa uma consulta SQL

### Descrição

public function **SQLite3::query**([string](language.types.string.md) `$query`): [SQLite3Result](class.sqlite3result.md)|[false](language.types.singleton.md)

Executa uma consulta SQL, retornando um objeto [SQLite3Result](class.sqlite3result.md).
Se a consulta não produzir um resultado (como declarações DML), o objeto
[SQLite3Result](class.sqlite3result.md) retornado não será realmente utilizável.
Use [SQLite3::exec()](sqlite3.exec.md) para essas consultas.

### Parâmetros

`query`
:   A consulta SQL a ser executada.

### Valor Retornado

Retorna um objeto [SQLite3Result](class.sqlite3result.md), ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SQLite3::query()****

```
<?php
$db = new SQLite3('mysqlitedb.db');

$results = $db->query('SELECT bar FROM foo');
while ($row = $results->fetchArray()) {
    var_dump($row);
}
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
