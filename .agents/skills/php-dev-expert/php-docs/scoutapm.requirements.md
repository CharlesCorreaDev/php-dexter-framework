# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/scoutapm.requirements.php

---

## Dependências

- PHP >= 7.1.0
- O Windows não é compatível no momento

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
