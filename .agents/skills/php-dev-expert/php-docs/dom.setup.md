# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](dom.requirements.md)
- [Instalação](dom.installation.md)

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
