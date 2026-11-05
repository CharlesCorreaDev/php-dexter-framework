# Cria objeto observador EvIo parado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evio.createstopped.php

---

# EvIo::createStopped

(PECL ev >= 0.2.0)

EvIo::createStopped — Cria objeto observador EvIo parado

### Descrição

final
public
static
function **EvIo::createStopped**(  
    
[mixed](language.types.mixed.md) `$fd`
,  
    
[int](language.types.integer.md) `$events`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = **`null`**
,  
    
[int](language.types.integer.md) `$priority`
 = 0
  
): [EvIo](class.evio.md)

O mesmo que
[EvIo::\_\_construct()](evio.construct.md),
mas não inicia o observador automaticamente.

### Parâmetros

`fd`
:   O mesmo que para
    [EvIo::\_\_construct()](evio.construct.md)

`events`
:   O mesmo que para
    [EvIo::\_\_construct()](evio.construct.md)

`callback`
:   Veja
    [Retornos de chamada do observador](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade do observador](class.ev.md#ev.constants.watcher-pri)

### Valor Retornado

Retorna o objeto EvIo em caso de sucesso.

### Veja também

- [EvIo::\_\_construct()](evio.construct.md) - Constrói objeto observador EvIo
- [EvLoop::io()](evloop.io.md) - Cria objeto observador EvIo associado à instância de laço de evento
  atual

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
