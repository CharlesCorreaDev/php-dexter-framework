# Reinicia o conjunto de resultados de volta para a primeira linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3result.reset.php

---

# SQLite3Result::reset

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Result::reset — Reinicia o conjunto de resultados de volta para a primeira linha

### Descrição

public function **SQLite3Result::reset**(): [bool](language.types.boolean.md)

Reinicia o conjunto de resultados de volta para a primeira linha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o conjunto de resultados for reiniciado com sucesso
para a primeira linha, **`false`** em caso de falha.

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
