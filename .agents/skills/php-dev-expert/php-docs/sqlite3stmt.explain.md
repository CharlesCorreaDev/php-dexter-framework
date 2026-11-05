# Returns the explain mode of the statement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.explain.php

---

# SQLite3Stmt::explain

(PHP 8 >= 8.5.0)

SQLite3Stmt::explain — Returns the explain mode of the statement

### Descrição

public function **SQLite3Stmt::explain**(): [int](language.types.integer.md)

Returns the explain mode currently set on the statement with
[SQLite3Stmt::setExplain()](sqlite3stmt.setexplain.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Returns one of **`SQLite3Stmt::EXPLAIN_MODE_PREPARED`**,
**`SQLite3Stmt::EXPLAIN_MODE_EXPLAIN`**, or
**`SQLite3Stmt::EXPLAIN_MODE_EXPLAIN_QUERY_PLAN`**.

### Veja também

- [SQLite3Stmt::setExplain()](sqlite3stmt.setexplain.md) - Changes the explain mode of the statement
- [SQLite3Stmt::execute()](sqlite3stmt.execute.md) - Executa uma declaração preparada e retorna um objeto de conjunto de resultados
- [SQLite3Stmt::reset()](sqlite3stmt.reset.md) - Reseta a declaração preparada

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
