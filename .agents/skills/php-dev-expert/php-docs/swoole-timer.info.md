# Get information about a timer.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-timer.info.php

---

# Swoole\Timer::info

(No version information available, might only be in Git)

Swoole\Timer::info — Get information about a timer.

### Descrição

public static function **Swoole\Timer::info**([int](language.types.integer.md) `$timer_id`): [?](language.types.null.md)[array](language.types.array.md)

Get information about a timer. As of Swoole 4.4.0.

### Parâmetros

`timer_id`
:   The timer ID returned by [Swoole\Timer::tick()](swoole-timer.tick.md) or
    [Swoole\Timer::after()](swoole-timer.after.md).

### Valor Retornado

Returns an array describing the timer, or **`null`** if no timer with this ID
exists in the current process. The array contains the following keys:

`exec_msec`
:   The time of the next execution, in milliseconds, counted from the moment
    the timer subsystem was started. It is not a duration.

`exec_count`
:   The number of times the callback has been executed.
    Available as of Swoole 4.8.0.

`interval`
:   The interval of the timer, in milliseconds.

`round`
:   The number of the timer loop round in which the timer was created.

`removed`
:   Whether the timer has been removed.

### Examples

**Exemplo #1 **Swoole\Timer::info()** example**

```
<?php
$timer_id = Swoole\Timer::tick(1000, function () {});
var_dump(Swoole\Timer::info($timer_id));
Swoole\Timer::clear($timer_id);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(5) {
  ["exec_msec"]=>
  int(1000)
  ["exec_count"]=>
  int(0)
  ["interval"]=>
  int(1000)
  ["round"]=>
  int(0)
  ["removed"]=>
  bool(false)
}
```

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
