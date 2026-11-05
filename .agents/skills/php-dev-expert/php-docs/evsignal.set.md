# Configura o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evsignal.set.php

---

# EvSignal::set

(PECL ev >= 0.2.0)

EvSignal::set — Configura o observador

### Descrição

public
function **EvSignal::set**(
[int](language.types.integer.md) `$signum`
): [void](language.types.void.md)

Configura o observador.

### Parâmetros

`signum`
:   Número do sinal. O mesmo que para
    [EvSignal::\_\_construct()](evsignal.construct.md).

### Valor Retornado

Nenhum valor é retornado.

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
