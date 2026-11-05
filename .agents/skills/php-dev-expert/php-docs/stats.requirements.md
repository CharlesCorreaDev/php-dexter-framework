# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stats.requirements.php

---

## Dependências

Não são necessárias bibliotecas externas. A extensão vem com as bibliotecas utilizadas.

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
