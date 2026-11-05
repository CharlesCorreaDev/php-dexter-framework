# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaconf.requirements.php

---

## Dependências

Yaconf requer PHP 7.0 ou superior.

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
