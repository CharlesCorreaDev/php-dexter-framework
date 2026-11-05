# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xhprof.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`XHPROF_FLAGS_NO_BUILTINS`** ([int](language.types.integer.md))
:   Usado para pular todas as funções internas.

**`XHPROF_FLAGS_CPU`** ([int](language.types.integer.md))
:   Usado para adicionar informações de perfil de CPU à saída.

**`XHPROF_FLAGS_MEMORY`** ([int](language.types.integer.md))
:   Usado para adicionar informações de perfil de memória à saída.

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
