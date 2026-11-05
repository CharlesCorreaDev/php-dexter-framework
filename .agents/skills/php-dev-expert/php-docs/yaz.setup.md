# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaz.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](yaz.requirements.md)
- [Instalação](yaz.installation.md)

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
