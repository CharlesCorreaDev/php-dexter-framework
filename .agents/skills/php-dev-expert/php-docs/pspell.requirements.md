# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pspell.requirements.php

---

## Dependências

Para compilar PHP com suporte pspell, é necessária a biblioteca aspell,
disponível em [» http://aspell.net/](http://aspell.net/).

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
