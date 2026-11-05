# Constrói o objeto observador EvIdle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evidle.construct.php

---

# EvIdle::\_\_construct

(PECL ev >= 0.2.0)

EvIdle::\_\_construct — Constrói o objeto observador EvIdle

### Descrição

public
function **EvIdle::\_\_construct**(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = ?, 
[int](language.types.integer.md) `$priority`
 = ?)

Constrói o objeto observador EvIdle e inicia o observador automaticamente.

### Parâmetros

`callback`
:   Veja
    [Retornos de chamada do observador](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade do observador](class.ev.md#ev.constants.watcher-pri)

### Veja também

- [EvIdle::createStopped()](evidle.createstopped.md) - Cria uma instância de um objeto observador EvIdle
- [EvLoop::idle()](evloop.idle.md) - Cria objeto observador EvIdle associado à instância de laço de evento
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
