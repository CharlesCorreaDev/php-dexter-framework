# Retorna uma string que foi devidamente escapada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.escapestring.php

---

# SQLite3::escapeString

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::escapeString — Retorna uma string que foi devidamente escapada

### Descrição

public static function **SQLite3::escapeString**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma string que foi devidamente escapada para inclusão segura em uma
instrução SQL.

**Aviso**

Esta função
(ainda) não é compatível com dados binários!

Para lidar adequadamente com campos BLOB que podem conter caracteres NUL, use
[SQLite3Stmt::bindParam()](sqlite3stmt.bindparam.md) em vez disso.

### Parâmetros

`string`
:   A string a ser escapada.

### Valor Retornado

Retorna uma string devidamente escapada que pode ser usada com segurança em uma
instrução SQL.

### Notas

**Aviso**

[addslashes()](function.addslashes.md) *NÃO* deve ser usado para
citar suas strings para consultas SQLite; isso levará a resultados estranhos
ao recuperar seus dados.

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
