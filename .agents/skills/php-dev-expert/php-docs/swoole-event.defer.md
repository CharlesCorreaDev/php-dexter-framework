# Executa uma função no início do próximo ciclo de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-event.defer.php

---

# Swoole\Event::defer

(PECL swoole >= 1.9.0)

Swoole\Event::defer — Executa uma função no início do próximo ciclo de eventos

### Descrição

public static function **Swoole\Event::defer**([callable](language.types.callable.md) `$callback_function`): [void](language.types.void.md)

Agenda a execução de uma função no início do próximo ciclo de eventos.

### Parâmetros

`callback_function`
:   Função de callback a ser executada (nenhum parâmetro permitido; use `use` para variáveis de closure).

### Valor Retornado

Sem valor de retorno.

### Examples

**Exemplo #1 Exemplo de **Swoole\Event::defer()****

```
<?php
Swoole\Event::defer(function(){
    echo "Depois de EventLoop\n";
});
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
