# Changes the explain mode of the statement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.setexplain.php

---

# SQLite3Stmt::setExplain

(PHP 8 >= 8.5.0)

SQLite3Stmt::setExplain — Changes the explain mode of the statement

### Descrição

public function **SQLite3Stmt::setExplain**([int](language.types.integer.md) `$mode`): [bool](language.types.boolean.md)

Changes the explain mode of the statement, so that it behaves as if its SQL
was prefixed with `EXPLAIN` or
`EXPLAIN QUERY PLAN`, or as an ordinary statement again.

### Parâmetros

`mode`
:   One of **`SQLite3Stmt::EXPLAIN_MODE_PREPARED`**,
    **`SQLite3Stmt::EXPLAIN_MODE_EXPLAIN`**, or
    **`SQLite3Stmt::EXPLAIN_MODE_EXPLAIN_QUERY_PLAN`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

A [ValueError](class.valueerror.md) is thrown if `mode`
is not one of the **`SQLite3Stmt::EXPLAIN_MODE_*`** constants.

### Veja também

- [SQLite3Stmt::explain()](sqlite3stmt.explain.md) - Returns the explain mode of the statement
- [SQLite3Stmt::execute()](sqlite3stmt.execute.md) - Executa uma declaração preparada e retorna um objeto de conjunto de resultados

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
