# Returns whether the statement has been fetched but not yet completed

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.busy.php

---

# SQLite3Stmt::busy

(PHP 8 >= 8.5.0)

SQLite3Stmt::busy — Returns whether the statement has been fetched but not yet completed

### Descrição

public function **SQLite3Stmt::busy**(): [bool](language.types.boolean.md)

Returns whether the statement is busy, i.e. it has been started with
[SQLite3Stmt::execute()](sqlite3stmt.execute.md) and has rows remaining to be fetched,
but has not yet been completed or reset.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Returns **`true`** if the statement has been executed and still has rows to fetch,
**`false`** otherwise.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | This method was added. |

### Veja também

- [SQLite3Stmt::execute()](sqlite3stmt.execute.md) - Executa uma declaração preparada e retorna um objeto de conjunto de resultados
- [SQLite3Stmt::reset()](sqlite3stmt.reset.md) - Reseta a declaração preparada
- [SQLite3Stmt::close()](sqlite3stmt.close.md) - Fecha a declaração preparada

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
