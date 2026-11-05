# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/misc.setup.php

---

# Instalação/Configuração

## Índice

- [Configurações de Execução](misc.configuration.md)

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
