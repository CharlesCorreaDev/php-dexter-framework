# Interrompe o laço de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.stop.php

---

# EvLoop::stop

(PECL ev >= 0.2.0)

EvLoop::stop — Interrompe o laço de eventos

### Descrição

public
function **EvLoop::stop**(
[int](language.types.integer.md) `$how`
 = ?): [void](language.types.void.md)

Interrompe o laço de eventos.

### Parâmetros

`how`
:   Uma das
    [constants](class.ev.md#ev.constants.break-flags) *Ev::BREAK\_\**.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvLoop::run()](evloop.run.md) - Começa a verificar eventos e chamar funções de retorno para o laço
- [Ev::stop()](ev.stop.md) - Interrompe o laço de eventos padrão

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
