# Lista o histórico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-list-history.php

---

# readline\_list\_history

(PHP 4, PHP 5, PHP 7, PHP 8)

readline\_list\_history — Lista o histórico

### Descrição

function **readline\_list\_history**(): [array](language.types.array.md)

Obtém o histório completo da linha de comando.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array do histórico completo da linha de comando. Os elementos são
indexados por inteiros iniciando de zero.

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
