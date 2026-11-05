# Tenta carregar uma biblioteca de extensão do SQLite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.loadextension.php

---

# SQLite3::loadExtension

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::loadExtension — Tenta carregar uma biblioteca de extensão do SQLite

### Descrição

public function **SQLite3::loadExtension**([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

Tenta carregar uma biblioteca de extensão do SQLite.

### Parâmetros

`name`
:   O nome da biblioteca a ser carregada. A biblioteca deve estar localizada no
    diretório especificado na opção de configuração sqlite3.extension\_dir.

### Valor Retornado

Retorna **`true`** se a extensão for carregada com sucesso, **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SQLite3::loadExtension()****

```
<?php
$db = new SQLite3('mysqlitedb.db');
$db->loadExtension('libagg.so');
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
