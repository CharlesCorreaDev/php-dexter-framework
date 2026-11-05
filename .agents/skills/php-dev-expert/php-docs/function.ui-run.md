# Entra no Laço UI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ui-run.php

---

# UI\run

(UI 2.0.0)

UI\run — Entra no Laço UI

### Descrição

function **UI\run**([int](language.types.integer.md) `$flags` = ?): [void](language.types.void.md)

Faz com que o PHP entre no laço principal de repetição, por padrão o controle não será retornado ao chamador.

### Parâmetros

`flags`
:   Configura UI\Loop para retornar o controle, e UI\Wait para retornar o controle depois da espera.

### Valor Retornado

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
