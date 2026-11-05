# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.requirements.php

---

## Dependências

As funções COM estão disponíveis apenas para a versão Windows do PHP.

Para suporte ao .Net é necessário o .Net Runtime.

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
