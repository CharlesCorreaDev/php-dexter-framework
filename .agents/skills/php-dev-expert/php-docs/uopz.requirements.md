# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uopz.requirements.php

---

## Dependências

A partir do uopz 5.0, é necessário PHP 7.0. A partir do uopz 5.1, é necessário PHP 7.1+.

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
