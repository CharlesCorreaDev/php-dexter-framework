# Fecha a conexão com o banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.close.php

---

# SQLite3::close

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::close — Fecha a conexão com o banco de dados

### Descrição

public function **SQLite3::close**(): [bool](language.types.boolean.md)

Fecha a conexão com o banco de dados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SQLite3::close()****

```
<?php
$db = new SQLite3('mysqlitedb.db');
$db->close();
?>
```

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
