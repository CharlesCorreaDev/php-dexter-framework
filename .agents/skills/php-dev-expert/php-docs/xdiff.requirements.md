# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xdiff.requirements.php

---

## Dependências

Para usar o xdiff, é necessário ter o libxdiff instalado, disponível
na página inicial do libxdiff [» http://www.xmailserver.org/xdiff-lib.html](http://www.xmailserver.org/xdiff-lib.html).

> **Nota**:
>
> É necessário pelo menos o libxdiff 0.7 para que essas funções estejam cientes do limite de memória.

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
