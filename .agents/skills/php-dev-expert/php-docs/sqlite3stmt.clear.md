# Limpa todos os parâmetros vinculados atuais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3stmt.clear.php

---

# SQLite3Stmt::clear

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3Stmt::clear — Limpa todos os parâmetros vinculados atuais

### Descrição

public function **SQLite3Stmt::clear**(): [bool](language.types.boolean.md)

Limpa todos os parâmetros vinculados atuais (eles são definidos como **`null`**).

**Cuidado**

Este método precisa ser usado com [SQLite3Stmt::reset()](sqlite3stmt.reset.md).
Se usado sozinho, qualquer chamada para
[SQLite3Stmt::bindValue()](sqlite3stmt.bindvalue.md) ou
[SQLite3Stmt::bindParam()](sqlite3stmt.bindparam.md) não terá efeito
e todos os parâmetros vinculados terão o valor **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** após a limpeza bem-sucedida dos parâmetros vinculados, **`false`** em
caso de falha.

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
