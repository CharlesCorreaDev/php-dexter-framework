# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fann.requirements.php

---

## Dependências

PHP >= 5.2.0 e libfann >= 2.1.0

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
