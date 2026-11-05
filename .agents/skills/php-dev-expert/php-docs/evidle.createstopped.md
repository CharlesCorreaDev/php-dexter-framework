# Cria uma instância de um objeto observador EvIdle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evidle.createstopped.php

---

# EvIdle::createStopped

(PECL ev >= 0.2.0)

EvIdle::createStopped — Cria uma instância de um objeto observador EvIdle

### Descrição

final
public
static
function **EvIdle::createStopped**(
[string](language.types.string.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = ?, 
[int](language.types.integer.md) `$priority`
 = ?): [object](language.types.object.md)

O mesmo que
[EvIdle::\_\_construct()](evidle.construct.md),
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

Retorna o objeto EvIdle em caso de sucesso.

### Veja também

- [EvIdle::\_\_construct()](evidle.construct.md) - Constrói o objeto observador EvIdle
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
