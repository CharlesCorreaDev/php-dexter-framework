# Define número máximo de requisições processadas em uma consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-set-max-poll-reqs.php

---

# eio\_set\_max\_poll\_reqs

(PECL eio >= 0.0.1dev)

eio\_set\_max\_poll\_reqs — Define número máximo de requisições processadas em uma consulta

### Descrição

function **eio\_set\_max\_poll\_reqs**([int](language.types.integer.md) `$nreqs`): [void](language.types.void.md)

### Parâmetros

`nreqs`
:   Número de requisições.

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
