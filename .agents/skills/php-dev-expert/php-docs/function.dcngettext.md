# Versão plural de dcgettext

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dcngettext.php

---

# dcngettext

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

dcngettext — Versão plural de dcgettext

### Descrição

function **dcngettext**(  
    [string](language.types.string.md) `$domain`,  
    [string](language.types.string.md) `$singular`,  
    [string](language.types.string.md) `$plural`,  
    [int](language.types.integer.md) `$count`,  
    [int](language.types.integer.md) `$category`  
): [string](language.types.string.md)

Esta função permite substituir o domínio atual para uma
única pesquisa de mensagem no plural.

### Parâmetros

`domain`
:   O domínio

`singular`

`plural`

`count`

`category`

### Valor Retornado

Uma [string](language.types.string.md) em caso de sucesso.

### Veja também

- [ngettext()](function.ngettext.md) - Versão plural de gettext

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
