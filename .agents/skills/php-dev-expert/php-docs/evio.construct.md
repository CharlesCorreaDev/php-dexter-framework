# Constrói objeto observador EvIo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evio.construct.php

---

# EvIo::\_\_construct

(PECL ev >= 0.2.0)

EvIo::\_\_construct — Constrói objeto observador EvIo

### Descrição

public
function **EvIo::\_\_construct**(  
    
[mixed](language.types.mixed.md) `$fd`
,  
    
[int](language.types.integer.md) `$events`
,  
    
[callable](language.types.callable.md) `$callback`
,  
    
[mixed](language.types.mixed.md) `$data`
 = ?,  
    
[int](language.types.integer.md) `$priority`
 = ?  
)

Constrói objeto observador EvIo e inicia o observador automaticamente.

### Parâmetros

`fd`
:   Pode ser um fluxo aberto com
    [fopen()](function.fopen.md)
    ou funções semelhantes, descritor de arquivo numérico ou soquete.

`events`
:   **`Ev::READ`**
    e/ou
    **`Ev::WRITE`**.
    Veja
    [as máscaras de bits](class.ev.md#ev.constants.watcher-revents).

`callback`
:   Veja
    [Retornos de chamada do observador](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade do observador](class.ev.md#ev.constants.watcher-pri)

### Veja também

- [EvIo::createStopped()](evio.createstopped.md) - Cria objeto observador EvIo parado
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
