# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/shmop.setup.php

---

# Instalação/Configuração

## Índice

- [Instalação](shmop.installation.md)
- [Tipos de Recurso](shmop.resources.md)

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
