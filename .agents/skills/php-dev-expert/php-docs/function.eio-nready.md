# Retorna o número de requisições ainda não tratadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-nready.php

---

# eio\_nready

(PECL eio >= 0.0.1dev)

eio\_nready — Retorna o número de requisições ainda não tratadas

### Descrição

function **eio\_nready**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**eio\_nready()** retorna o número de requisições ainda não tratadas.

### Veja também

- [eio\_nreqs()](function.eio-nreqs.md) - Retorna o número de requisições a serem processadas
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
