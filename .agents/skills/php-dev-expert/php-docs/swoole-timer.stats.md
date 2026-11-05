# Get timer statistics.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-timer.stats.php

---

# Swoole\Timer::stats

(No version information available, might only be in Git)

Swoole\Timer::stats — Get timer statistics.

### Descrição

public static function **Swoole\Timer::stats**(): [array](language.types.array.md)

Get timer statistics. As of Swoole 4.4.0.

### Valor Retornado

Returns an array with the following keys:

`initialized`
:   Whether the timer subsystem has been started. It is **`false`** until the
    first timer is created.

`num`
:   The number of timers currently registered in the process.

`round`
:   The current round of the timer loop.

### Examples

**Exemplo #1 **Swoole\Timer::stats()** example**

```
<?php
$timer_id = Swoole\Timer::tick(1000, function () {});
var_dump(Swoole\Timer::stats());
Swoole\Timer::clear($timer_id);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  ["initialized"]=>
  bool(true)
  ["num"]=>
  int(1)
  ["round"]=>
  int(0)
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
