# Libera o bloqueio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-coroutine-lock.unlock.php

---

# Swoole\Coroutine\Lock::unlock

(No version information available, might only be in Git)

Swoole\Coroutine\Lock::unlock — Libera o bloqueio

### Descrição

public function **Swoole\Coroutine\Lock::unlock**(): [bool](language.types.boolean.md)

### Comportamento de desbloqueio

1. *Com io\_uring futex:* o sistema despertará precisamente uma corrotina na fila de espera.
2. *Sem io\_uring futex:* as corrotinas de espera precisam aguardar o tempo de espera terminar
   e competir para readquirir o bloqueio.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o bloqueio foi liberado com sucesso,
**`false`** caso contrário.

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
