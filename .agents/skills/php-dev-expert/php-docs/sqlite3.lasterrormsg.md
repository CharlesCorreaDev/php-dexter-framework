# Retorna o texto em inglês descrevendo a requisição SQLite mais recente que falhou

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.lasterrormsg.php

---

# SQLite3::lastErrorMsg

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::lastErrorMsg — 
Retorna o texto em inglês descrevendo a requisição SQLite mais recente que falhou

### Descrição

public function **SQLite3::lastErrorMsg**(): [string](language.types.string.md)

Retorna o texto em inglês descrevendo a requisição SQLite mais recente que falhou.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string em inglês descrevendo a requisição SQLite mais recente que falhou.

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
