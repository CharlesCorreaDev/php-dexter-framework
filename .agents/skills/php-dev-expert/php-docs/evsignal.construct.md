# Constrói objeto observador EvSignal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evsignal.construct.php

---

# EvSignal::\_\_construct

(PECL ev >= 0.2.0)

EvSignal::\_\_construct — Constrói objeto observador EvSignal

### Descrição

public
function **EvSignal::\_\_construct**(  
    
[int](language.types.integer.md) `$signum`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
)

Constrói o objeto observador EvSignal e o inicia automaticamente. Para um
observador de sinais parado considere o uso do
método
[EvSignal::createStopped()](evsignal.createstopped.md).

### Parâmetros

`signum`
:   Número do sinal. Consulte as constantes exportadas pela
    extensão *pcntl*.
    Consulte também
    a página do manual
    `signal(7)`.

`callback`
:   Consulte
    [funções de retorno observadoras](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados com o observador.

`priority`
:   [Prioridade de observadores](class.ev.md#ev.constants.watcher-pri).

### Examples

**Exemplo #1 Lidando com o sinal SIGTERM**

```
<?php
$w = new EvSignal(SIGTERM, function ($watcher) {
    echo "SIGTERM received\n";
    $watcher->stop();
});

Ev::run();
?>
```

### Veja também

- [EvSignal::createStopped()](evsignal.createstopped.md) - Cria objeto observador EvSignal parado

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
