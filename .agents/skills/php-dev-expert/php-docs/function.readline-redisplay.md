# Redesenha a tela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-redisplay.php

---

# readline\_redisplay

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

readline\_redisplay — Redesenha a tela

### Descrição

function **readline\_redisplay**(): [void](language.types.void.md)

Redesenha readline para atualizar a tela.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
