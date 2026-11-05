# Retorna o código de erro SQLSTATE

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-sql-exception.getsqlstate.php

---

# mysqli\_sql\_exception::getSqlState

(PHP 8 >= 8.1.2)

mysqli\_sql\_exception::getSqlState — Retorna o código de erro SQLSTATE

### Descrição

public function **mysqli\_sql\_exception::getSqlState**(): [string](language.types.string.md)

Retorna uma string contendo o código de erro SQLSTATE para o último erro.
O código de erro consiste em cinco caracteres.
Os valores são especificados por ANSI SQL e ODBC. Para obter uma lista de valores possíveis, consulte
[» https://dev.mysql.com/doc/mysql/en/error-handling.html](https://dev.mysql.com/doc/mysql/en/error-handling.html).

> **Nota**:
>
> Observe que nem todos os erros do MySQL ainda estão mapeados para SQLSTATEs.
> O valor `HY000` (erro geral) é usado para erros não mapeados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo o código de erro SQLSTATE para o último erro. O código de erro consiste em cinco caracteres.

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
