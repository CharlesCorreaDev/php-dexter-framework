# A classe Swoole\Timer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-timer.php

---

# A classe Swoole\Timer

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Timer**
{

/\* Métodos \*/

public static function [after](swoole-timer.after.md)([int](language.types.integer.md) `$after_time_ms`, [callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

public static function [clear](swoole-timer.clear.md)([int](language.types.integer.md) `$timer_id`): [void](language.types.void.md)

public static function [clearAll](swoole-timer.clearall.md)(): [bool](language.types.boolean.md)

public static function [exists](swoole-timer.exists.md)([int](language.types.integer.md) `$timer_id`): [bool](language.types.boolean.md)

public static function [info](swoole-timer.info.md)([int](language.types.integer.md) `$timer_id`): [?](language.types.null.md)[array](language.types.array.md)

public static function [list](swoole-timer.list.md)(): Swoole\Timer\Iterator

public static function [set](swoole-timer.set.md)([array](language.types.array.md) `$settings`): [void](language.types.void.md)

public static function [stats](swoole-timer.stats.md)(): [array](language.types.array.md)

public static function [tick](swoole-timer.tick.md)([int](language.types.integer.md) `$interval_ms`, [callable](language.types.callable.md) `$callback`, [string](language.types.string.md) `$param` = ?): [void](language.types.void.md)

}

## Índice

- [Swoole\Timer::after](swoole-timer.after.md) — Aciona uma função de retorno de chamada após um período de tempo.
- [Swoole\Timer::clear](swoole-timer.clear.md) — Exclui um temporizador pelo ID do temporizador.
- [Swoole\Timer::clearAll](swoole-timer.clearall.md) — Clear all timers in the current process.
- [Swoole\Timer::exists](swoole-timer.exists.md) — Verifica se um temporizador existe.
- [Swoole\Timer::info](swoole-timer.info.md) — Get information about a timer.
- [Swoole\Timer::list](swoole-timer.list.md) — Get an iterator over the timers of the current process
- [Swoole\Timer::set](swoole-timer.set.md) — Set timer-related parameters
- [Swoole\Timer::stats](swoole-timer.stats.md) — Get timer statistics.
- [Swoole\Timer::tick](swoole-timer.tick.md) — Repete uma função fornecida em cada intervalo de tempo especificado.

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
