# Prepara uma declaração SQL para execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.prepare.php

---

# SQLite3::prepare

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::prepare — Prepara uma declaração SQL para execução

### Descrição

public function **SQLite3::prepare**([string](language.types.string.md) `$query`): [SQLite3Stmt](class.sqlite3stmt.md)|[false](language.types.singleton.md)

Prepara uma declaração SQL para execução e retorna um objeto [SQLite3Stmt](class.sqlite3stmt.md).

### Parâmetros

`query`
:   A consulta SQL a ser preparada.

### Valor Retornado

Retorna um objeto [SQLite3Stmt](class.sqlite3stmt.md) em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SQLite3::prepare()****

```
<?php
unlink('mysqlitedb.db');
$db = new SQLite3('mysqlitedb.db');

$db->exec('CREATE TABLE foo (id INTEGER, bar STRING)');
$db->exec("INSERT INTO foo (id, bar) VALUES (1, 'Isto é um teste')");

$stmt = $db->prepare('SELECT bar FROM foo WHERE id=:id');
$stmt->bindValue(':id', 1, SQLITE3_INTEGER);

$result = $stmt->execute();
var_dump($result->fetchArray());
?>
```

### Veja também

- [SQLite3Stmt::paramCount()](sqlite3stmt.paramcount.md) - Retorna o número de parâmetros dentro da declaração preparada
- [SQLite3Stmt::bindValue()](sqlite3stmt.bindvalue.md) - Vincula o valor de um parâmetro a uma variável de instrução
- [SQLite3Stmt::bindParam()](sqlite3stmt.bindparam.md) - Vincula um parâmetro a uma variável de instrução

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
