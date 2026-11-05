# Escopo Global

> **Fonte / Source:** https://www.php.net/manual/pt_BR/userlandnaming.globalnamespace.php

---

## Escopo Global

Aqui está uma visão geral de artefatos de código que acabam no escopo global:

- funções
- classes
- interfaces
- constantes (exceto constantes de classes)
- variáveis definidas fora de funções e métodos

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
