# Retorna um array indexado numericamente de superglobais registradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-superglobals.php

---

# runkit7\_superglobals

(PECL runkit7 >= Unknown)

runkit7\_superglobals — 
Retorna um array indexado numericamente de superglobais registradas

### Descrição

function **runkit7\_superglobals**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array indexada numericamente das superglobais atualmente registradas.
ou seja, \_GET, \_POST, \_REQUEST, \_COOKIE, \_SESSION, \_SERVER, \_ENV e \_FILES.

### Veja também

- [Escopo de variáveis](language.variables.scope.md)

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
