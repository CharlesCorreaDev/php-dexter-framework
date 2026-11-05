# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/parle.requirements.php

---

## Dependências

PHP 7.4 ou superior é suportado. É necessário um compilador compatível com C++14. Uma compilação de extensão bem-sucedida foi produzida com pelo menos clang 5.0, GCC 5.0 e Visual Studio 2015.

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
