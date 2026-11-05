# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds.requirements.php

---

## Dependências

PHP 7 é necessário tanto para a extensão quanto para o polyfill de compatibilidade.

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
