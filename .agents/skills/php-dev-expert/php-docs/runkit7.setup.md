# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/runkit7.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](runkit7.requirements.md)
- [Instalação](runkit7.installation.md)
- [Configurações de Execução](runkit7.configuration.md)

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
