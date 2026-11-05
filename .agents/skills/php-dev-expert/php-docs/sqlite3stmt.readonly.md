# Retorna se uma declaração é definitivamente somente leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.readonly.php

---

# SQLite3Stmt::readOnly

(PHP 5 >= 5.3.6, PHP 7, PHP 8)

SQLite3Stmt::readOnly — Retorna se uma declaração é definitivamente somente leitura

### Descrição

public function **SQLite3Stmt::readOnly**(): [bool](language.types.boolean.md)

Retorna se uma declaração é definitivamente somente leitura. Uma declaração é
considerada somente leitura se não fizer alterações *diretas*
no conteúdo do arquivo de banco de dados. Observe que funções SQL definidas pelo
usuário podem alterar o banco de dados *indiretamente* como um efeito colateral.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se uma declaração é definitivamente somente leitura, **`false`** caso contrário.

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
