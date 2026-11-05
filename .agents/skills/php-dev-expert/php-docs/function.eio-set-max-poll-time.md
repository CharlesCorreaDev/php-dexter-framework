# Define o tempo máximo de consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.eio-set-max-poll-time.php

---

# eio\_set\_max\_poll\_time

(PECL eio >= 0.0.1dev)

eio\_set\_max\_poll\_time — Define o tempo máximo de consulta

### Descrição

function **eio\_set\_max\_poll\_time**([float](language.types.float.md) `$nseconds`): [void](language.types.void.md)

A consulta para se demorar mais que `nseconds`
segundos.

### Parâmetros

`nseconds`
:   Número de segundos

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
