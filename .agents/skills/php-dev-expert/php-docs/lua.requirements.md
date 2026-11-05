# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/lua.requirements.php

---

## Dependências

Para usar esta extensão é necessário ter o interpretador Lua instalado, disponível no [» site oficial da linguagem Lua](https://www.lua.org/).

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
