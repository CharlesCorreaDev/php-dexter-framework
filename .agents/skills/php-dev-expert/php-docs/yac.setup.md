# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](yac.requirements.md)
- [Instalação](yac.installation.md)
- [Configurações de Execução](yac.configuration.md)
- [Tipos de Recurso](yac.resources.md)

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
