# Aguarda um bloqueio de gravação exclusivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncreaderwriter.writelock.php

---

# SyncReaderWriter::writelock

(PECL sync >= 1.0.0)

SyncReaderWriter::writelock — Aguarda um bloqueio de gravação exclusivo

### Descrição

public function **SyncReaderWriter::writelock**([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

Obtém um bloqueio de gravação exclusivo em um objeto [SyncReaderWriter](class.syncreaderwriter.md).

### Parâmetros

`wait`
:   O número de milissegundos de espera por um bloqueio.
    O valor -1 é infinito.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncReaderWriter::writelock()****

```
<?php
$readwrite = new SyncReaderWriter("FileCacheLock");
$readwrite->writelock();
/* ... */
$readwrite->writeunlock();
?>
```

### Veja também

- [SyncReaderWriter::writeunlock()](syncreaderwriter.writeunlock.md) - Libera um bloqueio de gravação

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
