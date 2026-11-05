# Retorna o ID da linha mais recentemente INSERIDA no banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.lastinsertrowid.php

---

# SQLite3::lastInsertRowID

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::lastInsertRowID — Retorna o ID da linha mais recentemente INSERIDA no banco de dados

### Descrição

public function **SQLite3::lastInsertRowID**(): [int](language.types.integer.md)

Retorna o ID da linha mais recentemente INSERIDA no banco de dados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID da linha mais recentemente inserida no banco de dados.
Se nenhuma inserção bem-sucedida em tabelas com rowid já ocorreu nesta conexão de banco de dados,
então **SQLite3::lastInsertRowID()** retorna `0`.

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
