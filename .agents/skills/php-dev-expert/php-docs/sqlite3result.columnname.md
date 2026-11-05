# Retorna o nome da enésima coluna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3result.columnname.php

---

# SQLite3Result::columnName

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Result::columnName — Retorna o nome da enésima coluna

### Descrição

public function **SQLite3Result::columnName**([int](language.types.integer.md) `$column`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome da coluna especificada pelo
`column`.
Observe que o nome de uma coluna de resultado é o valor da cláusula `AS`
para essa coluna, se houver uma cláusula `AS`. Se não houver uma cláusula `AS`,
então o nome da coluna é não especificado e pode mudar de uma versão para
outra do libsqlite3.

### Parâmetros

`column`
:   O índice baseado em zero, numérico, da coluna.

### Valor Retornado

Retorna o [string](language.types.string.md) nome da coluna identificada por
`column`, ou **`false`** se a coluna não existir.

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
