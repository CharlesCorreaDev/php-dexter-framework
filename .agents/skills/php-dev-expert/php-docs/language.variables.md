# Variáveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.variables.php

---

# Variáveis

## Índice

- [Básico](language.variables.basics.md)
- [Variáveis Predefinidas](language.variables.predefined.md)
- [Escopo de variáveis](language.variables.scope.md)
- [Variáveis variáveis](language.variables.variable.md)
- [Variáveis de fontes externas](language.variables.external.md)

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
