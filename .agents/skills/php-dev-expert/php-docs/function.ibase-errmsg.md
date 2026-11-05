# Retorna mensagens de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-errmsg.php

---

# ibase\_errmsg

(PHP 5, PHP 7 < 7.4.0)

ibase\_errmsg — Retorna mensagens de erro

### Descrição

function **ibase\_errmsg**(): [string](language.types.string.md)

Retorna a mensagem de erro resultante da chamada mais recente da função
InterBase.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a mensagem de erro como uma string, ou **`false`** se nenhum erro ocorreu.

### Veja também

- [ibase\_errcode()](function.ibase-errcode.md) - Retorna um código de erro

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
