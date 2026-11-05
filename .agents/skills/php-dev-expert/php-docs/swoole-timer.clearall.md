# Clear all timers in the current process.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-timer.clearall.php

---

# Swoole\Timer::clearAll

(No version information available, might only be in Git)

Swoole\Timer::clearAll — Clear all timers in the current process.

### Descrição

public static function **Swoole\Timer::clearAll**(): [bool](language.types.boolean.md)

Clear all timers in the current process. As of Swoole 4.4.0.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
**`false`** is returned when no timer has been created in this process yet.
Only timers created from PHP are removed; internal timers are left in place.

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
