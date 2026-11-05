# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/runkit7.requirements.php

---

## Dependências

*Modificação de constantes, funções, classes e métodos*
assim como *superglobais personalizadas*
funcionam com todas as versões do PHP 7. Nenhum requisito especial é
necessário.

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
