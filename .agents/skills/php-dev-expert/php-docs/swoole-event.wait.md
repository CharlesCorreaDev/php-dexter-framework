# Inicia o loop de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-event.wait.php

---

# Swoole\Event::wait

(PECL swoole >= 1.9.0)

Swoole\Event::wait — Inicia o loop de eventos

### Descrição

public static function **Swoole\Event::wait**(): [void](language.types.void.md)

Inicia o loop de eventos. Coloque isso no final do seu programa PHP.

### Valor Retornado

Sem valor de retorno.

### Examples

**Exemplo #1 Exemplo de **Swoole\Event::wait()****

```
<?php
Swoole\Timer::tick(1000, function () {
    echo "hello\n";
});

Swoole\Event::wait();
?>
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
