# Retorna o número de threads em uso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-nthreads.php

---

# eio\_nthreads

(PECL eio >= 0.0.1dev)

eio\_nthreads — Retorna o número de threads em uso

### Descrição

function **eio\_nthreads**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**eio\_nthreads()** retorna o número de threads em
uso.

### Veja também

- [eio\_npending()](function.eio-npending.md) - Retorna o número de requisições concluídas, mas não tratadas
- [eio\_nready()](function.eio-nready.md) - Retorna o número de requisições ainda não tratadas
- [eio\_nreqs()](function.eio-nreqs.md) - Retorna o número de requisições a serem processadas
- [eio\_set\_max\_idle()](function.eio-set-max-idle.md) - Define o número máximo de threads ociosas
- [eio\_set\_max\_parallel()](function.eio-set-max-parallel.md) - Define número máximo de threads paralelas
- [eio\_set\_min\_parallel()](function.eio-set-min-parallel.md) - Define número mínimo de threads paralelas

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
