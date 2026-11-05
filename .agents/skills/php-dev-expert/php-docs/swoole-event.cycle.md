# Define uma função a ser executada ao final de cada iteração do loop de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-event.cycle.php

---

# Swoole\Event::cycle

(No version information available, might only be in Git)

Swoole\Event::cycle — Define uma função a ser executada ao final de cada iteração do loop de eventos

### Descrição

public static function **Swoole\Event::cycle**([callable](language.types.callable.md) `$callback`, [bool](language.types.boolean.md) `$before` = false): [bool](language.types.boolean.md)

Define uma função de callback para ser executada ao final (ou no início, se `before` for verdadeiro) de cada iteração do loop de eventos.

### Parâmetros

`callback`
:   A função a ser executada. Defina como `null` para limpar uma função de ciclo definida anteriormente.

`before`
:   Se `true`, o callback é executado antes do loop de eventos; se `false`, depois.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Uso básico**

```
<?php
Swoole\Timer::tick(2000, function ($id) {
    var_dump($id);
});

Swoole\Event::cycle(function () {
    echo "hello [1]\n";
    Swoole\Event::cycle(function () {
        echo "hello [2]\n";
        Swoole\Event::cycle(null);
    });
});

Swoole\Event::wait();
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
