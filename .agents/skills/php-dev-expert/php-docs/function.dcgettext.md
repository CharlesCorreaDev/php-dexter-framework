# Substitui o domínio padrão para uma procura única

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dcgettext.php

---

# dcgettext

(PHP 4, PHP 5, PHP 7, PHP 8)

dcgettext — Substitui o domínio padrão para uma procura única

### Descrição

function **dcgettext**([string](language.types.string.md) `$domain`, [string](language.types.string.md) `$message`, [int](language.types.integer.md) `$category`): [string](language.types.string.md)

Esta função substituir o domínio padrão para uma
busca única de mensagem.

### Parâmetros

`domain`
:   O domínio.

`message`
:   A mensagem.

`category`
:   A categoria.

### Valor Retornado

Uma [string](language.types.string.md) em caso de sucesso.

### Veja também

- [gettext()](function.gettext.md) - Pesquisa uma mensagem no domínio atual

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
