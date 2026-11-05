# Define o número máximo de threads ociosas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-set-max-idle.php

---

# eio\_set\_max\_idle

(PECL eio >= 0.0.1dev)

eio\_set\_max\_idle — Define o número máximo de threads ociosas

### Descrição

function **eio\_set\_max\_idle**([int](language.types.integer.md) `$nthreads`): [void](language.types.void.md)

### Parâmetros

`nthreads`
:   Número de threads ociosas.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [eio\_nthreads()](function.eio-nthreads.md) - Retorna o número de threads em uso
- [eio\_set\_min\_parallel()](function.eio-set-min-parallel.md) - Define número mínimo de threads paralelas
- [eio\_set\_max\_parallel()](function.eio-set-max-parallel.md) - Define número máximo de threads paralelas

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
