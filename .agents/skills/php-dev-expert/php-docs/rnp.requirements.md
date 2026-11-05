# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rnp.requirements.php

---

## Dependências

Para usar as funções RNP é necessário instalar a biblioteca [» RNP](https://www.rnpgp.org/). Versão >= 0.16.2 da biblioteca
é requerida.

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
