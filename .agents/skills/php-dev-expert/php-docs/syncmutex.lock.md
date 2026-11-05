# Aguarda um bloqueio exclusivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncmutex.lock.php

---

# SyncMutex::lock

(PECL sync >= 1.0.0)

SyncMutex::lock — Aguarda um bloqueio exclusivo

### Descrição

public function **SyncMutex::lock**([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

Obtém um bloqueio exclusivo em um objeto [SyncMutex](class.syncmutex.md).
Se o bloqueio já estiver adquirido, isso incrementa um contador interno.

### Parâmetros

`wait`
:   O número de milissegundos a aguardar pelo bloqueio exclusivo.
    Um valor de -1 é infinito.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncMutex::lock()****

```
<?php
$mutex = new SyncMutex("UniqueName");

if (!$mutex->lock(3000))
{
    echo "Não foi possível bloquear o mutex.";

    exit();
}

/* ... */

$mutex->unlock();
?>
```

### Veja também

- [SyncMutex::unlock()](syncmutex.unlock.md) - Destrava o mutex

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
