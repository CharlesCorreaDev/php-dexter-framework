# Executa um autoteste no módulo aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-enc-self-test.php

---

# mcrypt\_enc\_self\_test

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_enc\_self\_test — Executa um autoteste no módulo aberto

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_enc\_self\_test**([resource](language.types.resource.md) `$td`): [int](language.types.integer.md)

Esta função executa o autoteste no algoritmo especificado pelo
descritor `td`.

### Parâmetros

`td`
:   O descritor de criptografia.

### Valor Retornado

Retorna `0` em caso de sucesso e um [int](language.types.integer.md) negativo em caso de falha.

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
