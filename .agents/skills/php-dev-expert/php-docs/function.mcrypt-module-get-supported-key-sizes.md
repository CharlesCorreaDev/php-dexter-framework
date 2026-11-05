# Retorna um array com os tamanhos de chaves suportados do algoritmo aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-module-get-supported-key-sizes.php

---

# mcrypt\_module\_get\_supported\_key\_sizes

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_module\_get\_supported\_key\_sizes — Retorna um array com os tamanhos de chaves suportados do algoritmo aberto

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_module\_get\_supported\_key\_sizes**([string](language.types.string.md) `$algorithm`, [string](language.types.string.md) `$lib_dir` = ?): [array](language.types.array.md)

Retorna um array com os tamanhos de chave suportados pelo algoritmo especificado.
Se retornar um array vazio, todos os tamanhos de chave entre 1 e
[mcrypt\_module\_get\_algo\_key\_size()](function.mcrypt-module-get-algo-key-size.md) são suportados pelo
algoritmo.

### Parâmetros

`algorithm`
:   O algoritmo a ser usado.

`lib_dir`
:   O parâmetro opcional `lib_dir` pode conter o
    local onde o módulo de algoritmo está no sistema.

### Valor Retornado

Retorna um array com os tamanhos de chave suportados pelo algoritmo especificado.
Se retornar um array vazio, todos os tamanhos de chave entre 1 e
[mcrypt\_module\_get\_algo\_key\_size()](function.mcrypt-module-get-algo-key-size.md) são suportados pelo
algoritmo.

### Veja também

- [mcrypt\_enc\_get\_supported\_key\_sizes()](function.mcrypt-enc-get-supported-key-sizes.md) - Retorna um array com os tamanhos de chaves suportados do algoritmo aberto

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
