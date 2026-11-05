# Enables or disables the use of extended result codes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.enableextendedresultcodes.php

---

# SQLite3::enableExtendedResultCodes

(PHP 7 >= 7.4.0, PHP 8)

SQLite3::enableExtendedResultCodes — 
Enables or disables the use of extended result codes

### Descrição

public function **SQLite3::enableExtendedResultCodes**([bool](language.types.boolean.md) `$enable` = **`true`**): [bool](language.types.boolean.md)

Enables or disables the use of extended result codes, which are then
reported by [SQLite3::lastErrorCode()](sqlite3.lasterrorcode.md).
[SQLite3::lastExtendedErrorCode()](sqlite3.lastextendederrorcode.md) is not affected by
this setting, and always returns the extended result code.

### Parâmetros

`enable`
:   Whether to enable (**`true`**) or disable (**`false`**) the use of extended
    result codes.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **SQLite3::enableExtendedResultCodes()** example**

```
<?php
$db = new SQLite3(':memory:');
$db->enableExceptions(true);
$db->exec('CREATE TABLE t (a INTEGER UNIQUE)');
$db->exec('INSERT INTO t VALUES (1)');

try {
    $db->exec('INSERT INTO t VALUES (1)');
} catch (Exception $e) {
}

// The primary result code (SQLITE_CONSTRAINT), then the extended result
// code (SQLITE_CONSTRAINT_UNIQUE).
var_dump($db->lastErrorCode(), $db->lastExtendedErrorCode());

// Once enabled, SQLite3::lastErrorCode() reports the extended result code
// as well.
$db->enableExtendedResultCodes();
var_dump($db->lastErrorCode());
?>
```

O exemplo acima produzirá:

```
int(19)
int(2067)
int(2067)
```

### Veja também

- [SQLite3::lastExtendedErrorCode()](sqlite3.lastextendederrorcode.md) - Returns the numeric extended result code of the most recent failed
  SQLite request
- [SQLite3::lastErrorCode()](sqlite3.lasterrorcode.md) - Retorna o código de resultado numérico da última solicitação SQLite que falhou

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
