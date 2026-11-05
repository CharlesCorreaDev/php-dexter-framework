# Libera um bloqueio de gravação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncreaderwriter.writeunlock.php

---

# SyncReaderWriter::writeunlock

(PECL sync >= 1.0.0)

SyncReaderWriter::writeunlock — Libera um bloqueio de gravação

### Descrição

public function **SyncReaderWriter::writeunlock**(): [bool](language.types.boolean.md)

Libera um bloqueio de gravação em um objeto [SyncReaderWriter](class.syncreaderwriter.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncReaderWriter::writeunlock()****

```
<?php
$readwrite = new SyncReaderWriter("FileCacheLock");
$readwrite->writelock();
/* ... */
$readwrite->writeunlock();
?>
```

### Veja também

- [SyncReaderWriter::writelock()](syncreaderwriter.writelock.md) - Aguarda um bloqueio de gravação exclusivo

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
