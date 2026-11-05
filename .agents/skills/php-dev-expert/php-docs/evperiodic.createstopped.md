# Cria um observador EvPeriodic parado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evperiodic.createstopped.php

---

# EvPeriodic::createStopped

(PECL ev >= 0.2.0)

EvPeriodic::createStopped — Cria um observador EvPeriodic parado

### Descrição

final
public
static
function **EvPeriodic::createStopped**(  
    
[float](language.types.float.md) `$offset`
,  
    
[float](language.types.float.md) `$interval`
,  
    
[callable](language.types.callable.md) `$reschedule_cb`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvPeriodic](class.evperiodic.md)

Cria um objeto EvPeriodic. Ao contrário de
[EvPeriodic::\_\_construct()](evperiodic.construct.md),
este método não inicia o observador automaticamente.

### Parâmetros

`offset`
:   Veja
    [Modos de operação do observador periódico](ev.periodic-modes.md)

`interval`
:   Veja
    [Modos de operação do observador periódico](ev.periodic-modes.md)

`reschedule_cb`
:   Reprogramaa retorno de chamada. Você pode passar **`null`**. Veja
    [Modos de operação do observador
    periódico](ev.periodic-modes.md)

`callback`
:   Veja
    [Retornos de chamada do observador](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade do observador](class.ev.md#ev.constants.watcher-pri)

### Valor Retornado

Retorna o objeto observador EvPeriodic em caso de sucesso.

### Veja também

- [EvPeriodic::\_\_construct()](evperiodic.construct.md) - Constrói objeto observador EvPeriodic
- [EvTimer::createStopped()](evtimer.createstopped.md) - Cria objeto observador EvTimer parado

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
