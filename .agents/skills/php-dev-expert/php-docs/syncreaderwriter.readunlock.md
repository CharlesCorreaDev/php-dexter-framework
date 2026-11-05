# Libera um bloqueio de leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncreaderwriter.readunlock.php

---

# SyncReaderWriter::readunlock

(PECL sync >= 1.0.0)

SyncReaderWriter::readunlock — Libera um bloqueio de leitura

### Descrição

public function **SyncReaderWriter::readunlock**(): [bool](language.types.boolean.md)

Libera um bloqueio de leitura em um objeto [SyncReaderWriter](class.syncreaderwriter.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncReaderWriter::readunlock()****

```
<?php
$readwrite = new SyncReaderWriter("FileCacheLock");
$readwrite->readlock();
/* ... */
$readwrite->readunlock();
?>
```

### Veja também

- [SyncReaderWriter::readlock()](syncreaderwriter.readlock.md) - Aguarda um bloqueio de leitura

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
