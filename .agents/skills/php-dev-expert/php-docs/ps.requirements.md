# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ps.requirements.php

---

## Dependências

É necessário pelo menos a biblioteca pslib >= 0.1.12. A biblioteca ps (pslib)
está disponível em [» https://pslib.sourceforge.net/](https://pslib.sourceforge.net/).

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
