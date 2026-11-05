# Define número mínimo de threads paralelas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-set-min-parallel.php

---

# eio\_set\_min\_parallel

(PECL eio >= 0.0.1dev)

eio\_set\_min\_parallel — Define número mínimo de threads paralelas

### Descrição

function **eio\_set\_min\_parallel**([string](language.types.string.md) `$nthreads`): [void](language.types.void.md)

### Parâmetros

`nthreads`
:   Número de threads paralelas.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [eio\_nthreads()](function.eio-nthreads.md) - Retorna o número de threads em uso
- [eio\_set\_max\_idle()](function.eio-set-max-idle.md) - Define o número máximo de threads ociosas
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
