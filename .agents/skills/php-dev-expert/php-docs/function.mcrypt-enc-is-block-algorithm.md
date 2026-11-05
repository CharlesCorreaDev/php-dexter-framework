# Verifica se o algoritmo do modo aberto é um algoritmo de bloco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-enc-is-block-algorithm.php

---

# mcrypt\_enc\_is\_block\_algorithm

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_enc\_is\_block\_algorithm — Verifica se o algoritmo do modo aberto é um algoritmo de bloco

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_enc\_is\_block\_algorithm**([resource](language.types.resource.md) `$td`): [bool](language.types.boolean.md)

Informa se o algoritmo do modo aberto é um algoritmo de bloco.

### Parâmetros

`td`
:   O descritor de criptografia.

### Valor Retornado

Retorna **`true`** se o algoritmo for um algoritmo de bloco ou **`false`** se for
um algoritmo de fluxo.

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
