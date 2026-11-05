# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/v8js.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](v8js.requirements.md)
- [Instalação](v8js.installation.md)
- [Configurações de Execução](v8js.configuration.md)

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
