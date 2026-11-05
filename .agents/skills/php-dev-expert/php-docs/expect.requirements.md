# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/expect.requirements.php

---

## Dependências

Este módulo usa as funções da biblioteca [» expect](http://expect.nist.gov/).
Será necessária versão da libexpect >= 5.43.0.

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
