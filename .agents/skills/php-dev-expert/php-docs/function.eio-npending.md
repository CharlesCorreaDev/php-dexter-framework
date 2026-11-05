# Retorna o número de requisições concluídas, mas não tratadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-npending.php

---

# eio\_npending

(PECL eio >= 0.0.1dev)

eio\_npending — Retorna o número de requisições concluídas, mas não tratadas

### Descrição

function **eio\_npending**(): [int](language.types.integer.md)

**eio\_npending()** retorna o número de requisições concluídas, mas não tratadas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**eio\_npending()** retorna o número de requisições concluídas, mas não
tratadas.

### Veja também

- [eio\_nreqs()](function.eio-nreqs.md) - Retorna o número de requisições a serem processadas
- [eio\_nready()](function.eio-nready.md) - Retorna o número de requisições ainda não tratadas
- [eio\_nthreads()](function.eio-nthreads.md) - Retorna o número de threads em uso

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
