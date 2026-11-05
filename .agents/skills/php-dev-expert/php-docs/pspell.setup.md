# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pspell.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](pspell.requirements.md)
- [Instalação](pspell.installation.md)
- [Tipos de Recurso](pspell.resources.md)

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
