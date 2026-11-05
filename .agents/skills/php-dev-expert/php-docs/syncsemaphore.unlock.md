# Aumenta a contagem do semáforo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncsemaphore.unlock.php

---

# SyncSemaphore::unlock

(PECL sync >= 1.0.0)

SyncSemaphore::unlock — Aumenta a contagem do semáforo

### Descrição

public function **SyncSemaphore::unlock**([int](language.types.integer.md) `&$prevcount` = ?): [bool](language.types.boolean.md)

Aumenta a contagem de um objeto [SyncSemaphore](class.syncsemaphore.md).

### Parâmetros

`prevcount`
:   Retorna a contagem anterior do semáforo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncSemaphore::unlock()****

```
<?php
$semaphore = new SyncSemaphore("LimitedResource_2clients", 2);

if (!$semaphore->lock(3000))
{
    echo "Não é possível bloquear o semáforo.";

    exit();
}

/* ... */

$semaphore->unlock();
?>
```

### Veja também

- [SyncSemaphore::lock()](syncsemaphore.lock.md) - Diminui a contagem do semáforo ou espera

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
