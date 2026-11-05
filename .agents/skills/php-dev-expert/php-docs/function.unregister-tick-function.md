# Desregistra uma função executada a cada tique

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.unregister-tick-function.php

---

# unregister\_tick\_function

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

unregister\_tick\_function — Desregistra uma função executada a cada tique

### Descrição

function **unregister\_tick\_function**([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

Desregistra a função nomeada por `callback` de forma que
não seja mais executada quando um [tique](control-structures.declare.md) for
chamado.

### Parâmetros

`callback`
:   O nome da função a ser desregistrada.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [register\_tick\_function()](function.register-tick-function.md) - Registra uma função para execução em cada tique

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
