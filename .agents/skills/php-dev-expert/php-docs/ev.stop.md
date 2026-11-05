# Interrompe o laço de eventos padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.stop.php

---

# Ev::stop

(PECL ev >= 0.2.0)

Ev::stop — Interrompe o laço de eventos padrão

### Descrição

final
public
static
function **Ev::stop**(
[int](language.types.integer.md) `$how`
 = ?): [void](language.types.void.md)

Interrompe o laço de eventos padrão.

### Parâmetros

`how`
:   Uma das
    [constants](class.ev.md#ev.constants.break-flags)
    *Ev::BREAK\_\**.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Ev::run()](ev.run.md) - Começa a verificar eventos e chamar funções de retorno para o
  laço padrão

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
