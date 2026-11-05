# Direitos Autorais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/copyright.php

---

# Direitos Autorais

Copyright © 1997 - 2026 PHP Documentation Group.
Este material pode ser distribuído apenas sob os termos e
condições determinados pela Creative Commons Attribution 3.0 ou
posterior. Uma cópia da [licença Creative
Commons Attribution 3.0](cc.license.md) é distribuída com este manual.
A última versão está disponível atualmente em
[» https://creativecommons.org/licenses/by/3.0/](https://creativecommons.org/licenses/by/3.0/).

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
