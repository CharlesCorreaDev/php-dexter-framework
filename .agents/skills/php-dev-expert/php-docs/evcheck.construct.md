# Constrói o objeto observador EvCheck

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evcheck.construct.php

---

# EvCheck::\_\_construct

(PECL ev >= 0.2.0)

EvCheck::\_\_construct — Constrói o objeto observador EvCheck

### Descrição

public
function **EvCheck::\_\_construct**(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = ?, 
[int](language.types.integer.md) `$priority`
 = ?)

Constrói o
objeto observador
[EvCheck](class.evcheck.md).

### Parâmetros

`callback`
:   Consulte [funções
    de retorno observadoras](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade de observadores](class.ev.md#ev.constants.watcher-pri)

### Veja também

- [EvPrepare](class.evprepare.md)
- [EvLoop::check()](evloop.check.md) - Cria o objeto EvCheck associado à instância atual do laço
  de eventos

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
