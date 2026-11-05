# Constrói o objeto observador EvFork

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evfork.construct.php

---

# EvFork::\_\_construct

(PECL ev >= 0.2.0)

EvFork::\_\_construct — Constrói o objeto observador EvFork

### Descrição

public
function **EvFork::\_\_construct**(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
)

Constrói o objeto observador EvFork e inicia o observador automaticamente.

### Parâmetros

`callback`
:   Veja
    [Retornos de chamada do observador](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade do observador](class.ev.md#ev.constants.watcher-pri)

### Veja também

- [EvLoop::fork()](evloop.fork.md) - Cria um objeto observador EvFork associado à instância atual
  do laço de eventos
- [EvCheck](class.evcheck.md)

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
