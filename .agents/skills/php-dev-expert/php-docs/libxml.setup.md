# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/libxml.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](libxml.requirements.md)
- [Instalação para versões do PHP >= 7.4](libxml.installation.md)
- [Instalação para versões do PHP < 7.4](libxml.installation_old.md)

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
