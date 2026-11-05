# Funções de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaml.callbacks.php

---

# Funções de retorno

## Índice

- [Funções de retorno de análise](yaml.callbacks.parse.md)
- [Funções de retorno de emissão](yaml.callbacks.emit.md)

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
