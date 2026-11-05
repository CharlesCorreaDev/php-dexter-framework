# Verifica se a criptografia do modo aberto funciona em blocos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-enc-is-block-algorithm-mode.php

---

# mcrypt\_enc\_is\_block\_algorithm\_mode

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_enc\_is\_block\_algorithm\_mode — Verifica se a criptografia do modo aberto funciona em blocos

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_enc\_is\_block\_algorithm\_mode**([resource](language.types.resource.md) `$td`): [bool](language.types.boolean.md)

Informa se o algoritmo do modo aberto funciona em blocos (por exemplo,
**`false`** para fluxo e **`true`** para cbc, cfb, ofb).

### Parâmetros

`td`
:   O descritor de criptografia.

### Valor Retornado

Informa se o algoritmo do modo aberto funciona em blocos (por exemplo,
**`false`** para fluxo e **`true`** para cbc, cfb, ofb).

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
