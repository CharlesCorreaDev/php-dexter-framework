# Retorna o tamanho do IV do algoritmo aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-enc-get-iv-size.php

---

# mcrypt\_enc\_get\_iv\_size

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_enc\_get\_iv\_size — Retorna o tamanho do IV do algoritmo aberto

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_enc\_get\_iv\_size**([resource](language.types.resource.md) `$td`): [int](language.types.integer.md)

Esta função retorna o tamanho do IV do algoritmo especificado pelo
descritor de criptografia em bytes. Um IV é usado nos modos cbc, cfb e ofb,
e em alguns algoritmos no modo de fluxo.

### Parâmetros

`td`
:   O descritor de criptografia.

### Valor Retornado

Retorna o tamanho do IV, ou 0 se o IV for ignorado pelo algoritmo.

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
