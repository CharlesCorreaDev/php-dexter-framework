# Configura o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evchild.set.php

---

# EvChild::set

(PECL ev >= 0.2.0)

EvChild::set — Configura o observador

### Descrição

public
function **EvChild::set**(
[int](language.types.integer.md) `$pid`
, 
[bool](language.types.boolean.md) `$trace`
): [void](language.types.void.md)

### Parâmetros

`pid`
:   O mesmo que para
    [EvChild::\_\_construct()](evchild.construct.md)

`trace`
:   O mesmo que para
    [EvChild::\_\_construct()](evchild.construct.md)

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvChild::\_\_construct()](evchild.construct.md) - Constrói o objeto observador EvChild

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
