# Cria uma instância parada da classe observadora EvFork

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evfork.createstopped.php

---

# EvFork::createStopped

(PECL ev >= 0.2.0)

EvFork::createStopped — Cria uma instância parada da classe observadora EvFork

### Descrição

final
public
static
function **EvFork::createStopped**(
[string](language.types.string.md) `$callback`
, 
[string](language.types.string.md) `$data`
 = ?, 
[string](language.types.string.md) `$priority`
 = ?): [object](language.types.object.md)

O mesmo que
[EvFork::\_\_construct()](evfork.construct.md),
mas não inicia o observador automaticamente.

### Parâmetros

`callback`
:   Veja
    [Retornos de chamada do observador](ev.watcher-callbacks.md).

`data`
:   Dados personalizados associados ao observador.

`priority`
:   [Prioridade do observador](class.ev.md#ev.constants.watcher-pri)

### Valor Retornado

Retorna o objeto EvFork(parado) em caso de sucesso.

### Veja também

- [EvFork::\_\_construct()](evfork.construct.md) - Constrói o objeto observador EvFork

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
