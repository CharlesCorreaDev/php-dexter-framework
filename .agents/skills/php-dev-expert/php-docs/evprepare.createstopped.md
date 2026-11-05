# Cria uma instância parada do observador EvPrepare

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evprepare.createstopped.php

---

# EvPrepare::createStopped

(PECL ev >= 0.2.0)

EvPrepare::createStopped — Cria uma instância parada do observador EvPrepare

### Descrição

final
public
static
function **EvPrepare::createStopped**(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
, 
[int](language.types.integer.md) `$priority`
 = 0
): [EvPrepare](class.evprepare.md)

Cria uma instância parada do observador EvPrepare. Ao contrário de
[EvPrepare::\_\_construct()](evprepare.construct.md),
este método não inicia o observador automaticamente.

### Parâmetros

`callback`
:   Veja
    [Retornos de chamada do observador](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade do observador](class.ev.md#ev.constants.watcher-pri)

### Valor Retornado

Retorna o objeto EvPrepare em caso de sucesso.

### Veja também

- [EvPrepare::\_\_construct()](evprepare.construct.md) - Constrói objeto observador EvPrepare
- [EvWatcher::start()](evwatcher.start.md) - Inicia o observador

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
