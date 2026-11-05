# Retorna um código de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-errcode.php

---

# ibase\_errcode

(PHP 5, PHP 7 < 7.4.0)

ibase\_errcode — Retorna um código de erro

### Descrição

function **ibase\_errcode**(): [int](language.types.integer.md)

Retorna o código de erro que resultou da chamada mais recente da função
InterBase.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código de erro como um inteiro ou **`false`** se nenhum erro ocorreu.

### Veja também

- [ibase\_errmsg()](function.ibase-errmsg.md) - Retorna mensagens de erro

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
