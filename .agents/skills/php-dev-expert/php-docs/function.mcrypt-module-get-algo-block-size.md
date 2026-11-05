# Retorna o tamanho do bloco do algoritmo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-module-get-algo-block-size.php

---

# mcrypt\_module\_get\_algo\_block\_size

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_module\_get\_algo\_block\_size — Retorna o tamanho do bloco do algoritmo especificado

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_module\_get\_algo\_block\_size**([string](language.types.string.md) `$algorithm`, [string](language.types.string.md) `$lib_dir` = ?): [int](language.types.integer.md)

Obtém o tamanho do bloco do algoritmo especificado.

### Parâmetros

`algorithm`
:   O nome do algoritmo.

`lib_dir`
:   Este parâmetro opcional pode conter o local onde o módulo de modo
    está no sistema.

### Valor Retornado

Retorna o tamanho do bloco do algoritmo especificado, em bytes.

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
