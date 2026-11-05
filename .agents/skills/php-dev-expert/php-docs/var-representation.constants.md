# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/var-representation.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`VAR_REPRESENTATION_SINGLE_LINE`** ([int](language.types.integer.md))
:   Opção da função [var\_representation()](function.var-representation.md) indicando que novas linhas
    não devem ser usadas para espaços em branco em representações de variáveis.

**`VAR_REPRESENTATION_UNESCAPED`** ([int](language.types.integer.md))
:   Opção da função [var\_representation()](function.var-representation.md) indicando que strings devem ser codificadas
    como strings entre aspas simples com caracteres de controle sem escape.

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
