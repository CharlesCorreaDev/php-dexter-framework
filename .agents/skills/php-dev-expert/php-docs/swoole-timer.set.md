# Set timer-related parameters

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-timer.set.php

---

# Swoole\Timer::set

(No version information available, might only be in Git)

Swoole\Timer::set — Set timer-related parameters

### Descrição

public static function **Swoole\Timer::set**([array](language.types.array.md) `$settings`): [void](language.types.void.md)

Sets the options used by the timers of the current process.

**Aviso**

This method was deprecated in Swoole 4.6.0 and removed in Swoole 6.0.0.
Use [swoole\_async\_set()](function.swoole-async-set.md) instead.

### Parâmetros

`settings`
:   An associative array of options. Only `enable_coroutine`
    is recognised: when set to **`false`**, the timer callbacks are executed
    directly instead of inside a newly created coroutine.

### Valor Retornado

Nenhum valor é retornado.

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
