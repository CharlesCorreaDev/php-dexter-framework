# Destrava o mutex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncmutex.unlock.php

---

# SyncMutex::unlock

(PECL sync >= 1.0.0)

SyncMutex::unlock — Destrava o mutex

### Descrição

public function **SyncMutex::unlock**([bool](language.types.boolean.md) `$all` = **`false`**): [bool](language.types.boolean.md)

Diminui o contador interno de um objeto [SyncMutex](class.syncmutex.md).
Quando o contador interno atinge zero, o bloqueio real no objeto é liberado.

### Parâmetros

`all`
:   Especifica se deve ou não definir o contador interno como zero e, portanto, liberar o bloqueio.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncMutex::unlock()****

```
<?php
$mutex = new SyncMutex("UniqueName");

$mutex->lock();

/* ... */

$mutex->unlock();
?>
```

### Veja também

- [SyncMutex::lock()](syncmutex.lock.md) - Aguarda um bloqueio exclusivo

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
