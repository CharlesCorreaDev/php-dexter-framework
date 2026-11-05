# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/readline.requirements.php

---

## Dependências

Para usar as funções readline, é necessário instalar o libreadlinem que pode ser
encontrado na página inicial do projeto Readline GNU, em
[» https://tiswww.case.edu/php/chet/readline/rltop.html](https://tiswww.case.edu/php/chet/readline/rltop.html).
É mantido por Chet Ramey, que também é autor do Bash.

Essas funções também podem ser usadas com a biblioteca libedit, uma substituição
não-GPL para a biblioteca readline. A biblioteca libedit é licenciada por BSD
e está disponível para download em
[» https://www.thrysoee.dk/editline/](https://www.thrysoee.dk/editline/).

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
