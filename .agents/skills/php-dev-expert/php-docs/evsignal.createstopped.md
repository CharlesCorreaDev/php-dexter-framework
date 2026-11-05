# Cria objeto observador EvSignal parado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evsignal.createstopped.php

---

# EvSignal::createStopped

(PECL ev >= 0.2.0)

EvSignal::createStopped — Cria objeto observador EvSignal parado

### Descrição

final
public
static
function **EvSignal::createStopped**(  
    
[int](language.types.integer.md) `$signum`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvSignal](class.evsignal.md)

Cria objeto observador EvSignal parado. Diferente de
[EvSignal::\_\_construct()](evsignal.construct.md),
este método não inicia o observador automaticamente.

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

### Valor Retornado

Retorna um objeto EvSignal em caso de sucesso.

### Veja também

- [EvWatcher::start()](evwatcher.start.md) - Inicia o observador
- [EvSignal::\_\_construct()](evsignal.construct.md) - Constrói objeto observador EvSignal

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
