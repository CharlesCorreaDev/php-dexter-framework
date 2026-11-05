# Diminui a contagem do semáforo ou espera

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncsemaphore.lock.php

---

# SyncSemaphore::lock

(PECL sync >= 1.0.0)

SyncSemaphore::lock — Diminui a contagem do semáforo ou espera

### Descrição

public function **SyncSemaphore::lock**([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

Diminui a contagem de um objeto [SyncSemaphore](class.syncsemaphore.md) ou aguarda até que o semáforo se torne diferente de zero.

### Parâmetros

`wait`
:   O número de milissegundos de espera pelo semáforo.
    O valor -1 é infinito.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SyncSemaphore::lock()****

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

- [SyncSemaphore::unlock()](syncsemaphore.unlock.md) - Aumenta a contagem do semáforo

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
