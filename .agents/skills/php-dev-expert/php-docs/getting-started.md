# Começando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/getting-started.php

---

# Começando

- [Introdução](introduction.md) — O que é o PHP e o que ele pode fazer?
- [Um simples tutorial](tutorial.md)
  - [Sua primeira página PHP](tutorial.firstpage.md)
  - [Algo Útil](tutorial.useful.md)
  - [Tratando Formulários](tutorial.forms.md)
  - [O que vem a seguir?](tutorial.whatsnext.md)

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
