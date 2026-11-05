# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sem.setup.php

---

# Instalação/Configuração

## Índice

- [Instalação](sem.installation.md)
- [Configurações de Execução](sem.configuration.md)
- [Tipos de Recurso](sem.resources.md)

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
