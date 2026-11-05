# Aguarda um bloqueio de leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncreaderwriter.readlock.php

---

# SyncReaderWriter::readlock

(PECL sync >= 1.0.0)

SyncReaderWriter::readlock — Aguarda um bloqueio de leitura

### Descrição

public function **SyncReaderWriter::readlock**([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

Obtém um bloqueio de leitura em um objeto [SyncReaderWriter](class.syncreaderwriter.md).

### Parâmetros

`wait`
:   O número de milissegundos de espera por um bloqueio.
    O valor -1 é infinito.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncReaderWriter::readlock()****

```
<?php
$readwrite = new SyncReaderWriter("FileCacheLock");
$readwrite->readlock();
/* ... */
$readwrite->readunlock();
?>
```

### Veja também

- [SyncReaderWriter::readunlock()](syncreaderwriter.readunlock.md) - Libera um bloqueio de leitura

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
