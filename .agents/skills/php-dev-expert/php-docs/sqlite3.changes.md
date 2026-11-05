# Retorna o número de linhas do banco de dados que foram alteradas (ou inseridas ou
   excluídas) pela instrução SQL mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.changes.php

---

# SQLite3::changes

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::changes — 
Retorna o número de linhas do banco de dados que foram alteradas (ou inseridas ou
excluídas) pela instrução SQL mais recente

### Descrição

public function **SQLite3::changes**(): [int](language.types.integer.md)

Retorna o número de linhas do banco de dados que foram alteradas (ou inseridas ou
excluídas) pela instrução SQL mais recente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um valor [int](language.types.integer.md) correspondente ao número de
linhas do banco de dados alteradas (ou inseridas ou excluídas) pela instrução SQL mais
recente.

### Examples

**Exemplo #1 Exemplo de **SQLite3::changes()****

```
<?php
$db = new SQLite3('mysqlitedb.db');

$query = $db->exec('UPDATE counter SET views=0 WHERE page="test"');
if ($query) {
    echo 'Number of rows modified: ', $db->changes();
}
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
