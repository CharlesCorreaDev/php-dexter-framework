# Guia de nomenclatura em espaço de usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/userlandnaming.php

---

# Guia de nomenclatura em espaço de usuário

## Índice

- [Escopo Global](userlandnaming.globalnamespace.md)
- [Regras](userlandnaming.rules.md)
- [Dicas](userlandnaming.tips.md)

O seguinte guia tem como objetivo orientar em como escolher nome para identificadores
em código PHP em espaço de usuário. Quando escolher nome para qualquer código que crie símbolos
no escopo global, é importante levar em conta as seguintes
orientações para prevenir que futuras versões do PHP entrem em conflito
com o seus símbolos.

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
