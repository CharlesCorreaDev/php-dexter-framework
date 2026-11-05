# Retorna o tipo da enésima coluna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3result.columntype.php

---

# SQLite3Result::columnType

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Result::columnType — Retorna o tipo da enésima coluna

### Descrição

public function **SQLite3Result::columnType**([int](language.types.integer.md) `$column`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o tipo da coluna identificada por
`column`.

### Parâmetros

`column`
:   O índice baseado em zero, numérico, da coluna.

### Valor Retornado

Retorna o índice do tipo de dados da coluna identificada por
`column` (um dos
**`SQLITE3_INTEGER`**, **`SQLITE3_FLOAT`**,
**`SQLITE3_TEXT`**, **`SQLITE3_BLOB`** ou
**`SQLITE3_NULL`**), ou **`false`** se a coluna não existir.

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
