# Returns the numeric extended result code of the most recent failed
   SQLite request

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.lastextendederrorcode.php

---

# SQLite3::lastExtendedErrorCode

(PHP 7 >= 7.4.0, PHP 8)

SQLite3::lastExtendedErrorCode — 
Returns the numeric extended result code of the most recent failed
SQLite request

### Descrição

public function **SQLite3::lastExtendedErrorCode**(): [int](language.types.integer.md)

Returns the numeric extended result code of the most recent failed SQLite
request. Unlike [SQLite3::lastErrorCode()](sqlite3.lasterrorcode.md), this method
always returns the extended result code, whether or not extended result
codes have been enabled with
[SQLite3::enableExtendedResultCodes()](sqlite3.enableextendedresultcodes.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Returns an integer value representing the numeric extended result code of
the most recent failed SQLite request.

### Veja também

- [SQLite3::enableExtendedResultCodes()](sqlite3.enableextendedresultcodes.md) - Enables or disables the use of extended result codes
- [SQLite3::lastErrorCode()](sqlite3.lasterrorcode.md) - Retorna o código de resultado numérico da última solicitação SQLite que falhou
- [SQLite3::lastErrorMsg()](sqlite3.lasterrormsg.md) - Retorna o texto em inglês descrevendo a requisição SQLite mais recente que falhou

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
