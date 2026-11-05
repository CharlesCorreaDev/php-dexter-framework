# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.requirements.php

---

## Dependências

A biblioteca `libev`
está incorporada nesta extensão. Não é necessário instalá-lo
separadamente.

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
