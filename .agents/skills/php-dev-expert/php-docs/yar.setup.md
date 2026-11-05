# Instalação/Configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar.setup.php

---

# Instalação/Configuração

## Índice

- [Dependências](yar.requirements.md)
- [Instalação](yar.installation.md)
- [Configurações de Execução](yar.configuration.md)
- [Tipos de Recurso](yar.resources.md)

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
