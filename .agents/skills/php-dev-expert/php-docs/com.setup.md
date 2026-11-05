# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](com.requirements.md)
- [Instalação](com.installation.md)
- [Configurações de Execução](com.configuration.md)

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
