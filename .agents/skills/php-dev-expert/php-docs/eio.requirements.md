# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eio.requirements.php

---

## Dependências

Esta extensão possui a biblioteca [» libeio](https://software.schmorp.de/pkg/libeio.html)
incorporada. NÃO é necessário instalar o libeio separadamente.

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
