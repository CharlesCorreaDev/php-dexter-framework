# Get an iterator over the timers of the current process

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-timer.list.php

---

# Swoole\Timer::list

(No version information available, might only be in Git)

Swoole\Timer::list — Get an iterator over the timers of the current process

### Descrição

public static function **Swoole\Timer::list**(): Swoole\Timer\Iterator

Returns an iterator over the IDs of the timers created from PHP in the
current process. Timers created internally by Swoole are not listed.
As of Swoole 4.4.0.

### Valor Retornado

Returns a **Swoole\Timer\Iterator** object, which
extends [ArrayIterator](class.arrayiterator.md) and yields the timer IDs as
[int](language.types.integer.md) values. The iterator is a snapshot taken when the method is
called; it is empty when no timer exists.

### Examples

**Exemplo #1 **Swoole\Timer::list()** example**

```
<?php
Swoole\Timer::tick(1000, function () {});
Swoole\Timer::after(5000, function () {});

foreach (Swoole\Timer::list() as $timer_id) {
    echo $timer_id, "\n";
    Swoole\Timer::clear($timer_id);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
1
2
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
