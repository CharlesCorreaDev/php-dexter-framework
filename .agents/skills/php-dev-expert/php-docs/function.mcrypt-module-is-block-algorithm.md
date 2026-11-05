# Esta função verifica se o algoritmo especificado é um algoritmo de bloco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-module-is-block-algorithm.php

---

# mcrypt\_module\_is\_block\_algorithm

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_module\_is\_block\_algorithm — Esta função verifica se o algoritmo especificado é um algoritmo de bloco

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_module\_is\_block\_algorithm**([string](language.types.string.md) `$algorithm`, [string](language.types.string.md) `$lib_dir` = ?): [bool](language.types.boolean.md)

Esta função retorna **`true`** se o algoritmo especificado for um algoritmo de bloco
ou **`false`** se for um algoritmo de fluxo.

### Parâmetros

`algorithm`
:   O algoritmo a ser verificado.

`lib_dir`
:   O parâmetro opcional `lib_dir` pode conter o
    local onde o módulo de algoritmo está no sistema.

### Valor Retornado

Esta função retorna **`true`** se o algoritmo especificado for um algoritmo de bloco
ou **`false`** se for um algoritmo de fluxo.

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
