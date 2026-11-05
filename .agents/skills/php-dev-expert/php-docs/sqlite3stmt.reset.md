# Reseta a declaração preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.reset.php

---

# SQLite3Stmt::reset

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Stmt::reset — Reseta a declaração preparada

### Descrição

public function **SQLite3Stmt::reset**(): [bool](language.types.boolean.md)

Reseta a declaração preparada para seu estado anterior à execução. Todas as ligações
permanecem intactas após o reset.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a declaração for resetada com sucesso, ou **`false`** em caso de falha.

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
