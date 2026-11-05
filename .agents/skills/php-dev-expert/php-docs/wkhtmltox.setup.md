# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wkhtmltox.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](wkhtmltox.requirements.md)
- [Instalação](wkhtmltox.installation.md)
- [Configurações de Execução](wkhtmltox.configuration.md)

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
