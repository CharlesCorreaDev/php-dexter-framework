# Constrói objeto observador EvPrepare

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evprepare.construct.php

---

# EvPrepare::\_\_construct

(PECL ev >= 0.2.0)

EvPrepare::\_\_construct — Constrói objeto observador EvPrepare

### Descrição

public
function **EvPrepare::\_\_construct**(
[string](language.types.string.md) `$callback`
, 
[string](language.types.string.md) `$data`
 = ?, 
[string](language.types.string.md) `$priority`
 = ?)

Constrói o objeto observador EvPrepare e inicia o observador automaticamente.
Se for necessário um observador parado, considere usar
[EvPrepare::createStopped()](evprepare.createstopped.md)

### Parâmetros

`callback`
:   Veja
    [Retornos de chamada do observador](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade do observador](class.ev.md#ev.constants.watcher-pri)

### Veja também

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
