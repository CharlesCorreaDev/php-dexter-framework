# Configura o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evio.set.php

---

# EvIo::set

(PECL ev >= 0.2.0)

EvIo::set — Configura o observador

### Descrição

public
function **EvIo::set**(
[mixed](language.types.mixed.md) `$fd`
, 
[int](language.types.integer.md) `$events`
): [void](language.types.void.md)

Configura o observador EvIo

### Parâmetros

`fd`
:   O mesmo que para
    [EvIo::\_\_construct()](evio.construct.md)

`events`
:   O mesmo que para
    [EvIo::\_\_construct()](evio.construct.md)

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
