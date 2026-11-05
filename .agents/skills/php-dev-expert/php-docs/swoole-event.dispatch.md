# Executa uma única iteração do loop de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-event.dispatch.php

---

# Swoole\Event::dispatch

(No version information available, might only be in Git)

Swoole\Event::dispatch — Executa uma única iteração do loop de eventos

### Descrição

public static function **Swoole\Event::dispatch**(): [void](language.types.void.md)

O objetivo desta função é manter a compatibilidade com alguns frameworks.
Quando um framework gerencia internamente seu próprio loop de 'reactor', o uso de `Event::wait`
permitiria que a camada subjacente do Swoole retivesse o controle, impedindo que o framework assumisse a execução.

### Valor Retornado

Nenhum valor de retorno.

### Examples

**Exemplo #1 Controle manual do loop de eventos**

```
<?php
while (true) {
    Swoole\Event::dispatch();
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
