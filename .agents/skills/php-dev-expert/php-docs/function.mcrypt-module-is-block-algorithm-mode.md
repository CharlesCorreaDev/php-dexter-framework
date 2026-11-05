# Retorna se o módulo especificado é um algoritmo de bloco ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-module-is-block-algorithm-mode.php

---

# mcrypt\_module\_is\_block\_algorithm\_mode

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_module\_is\_block\_algorithm\_mode — Retorna se o módulo especificado é um algoritmo de bloco ou não

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_module\_is\_block\_algorithm\_mode**([string](language.types.string.md) `$mode`, [string](language.types.string.md) `$lib_dir` = ?): [bool](language.types.boolean.md)

Esta função retorna **`true`** se o modo for para uso com algoritmos de bloco,
caso contrário, retorna **`false`**. (por exemplo, **`false`** para fluxo e
**`true`** para cbc, cfb, ofb).

### Parâmetros

`mode`
:   O modo a ser verificado.

`lib_dir`
:   O parâmetro opcional `lib_dir` pode conter o
    local onde o módulo de algoritmo está no sistema.

### Valor Retornado

Esta função retorna **`true`** se o modo for para uso com algoritmos de bloco,
caso contrário, retorna **`false`**. (por exemplo, **`false`** para fluxo e
**`true`** para cbc, cfb, ofb).

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
