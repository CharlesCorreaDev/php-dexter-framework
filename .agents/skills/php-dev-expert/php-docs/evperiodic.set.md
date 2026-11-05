# Configura o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evperiodic.set.php

---

# EvPeriodic::set

(PECL ev >= 0.2.0)

EvPeriodic::set — Configura o observador

### Descrição

public
function **EvPeriodic::set**(
[float](language.types.float.md) `$offset`
, 
[float](language.types.float.md) `$interval`
): [void](language.types.void.md)

(Re-)Configura o observador EvPeriodic

### Parâmetros

`offset`
:   O mesmo significado que para
    [EvPeriodic::\_\_construct()](evperiodic.construct.md).
    Veja
    [Modos de operação do observador periódico](ev.periodic-modes.md)

`interval`
:   O mesmo significado que para
    [EvPeriodic::\_\_construct()](evperiodic.construct.md).
    Veja
    [Modos de operação do observador periódico](ev.periodic-modes.md)

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
