# Verifica se o modo aberto produz blocos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-enc-is-block-mode.php

---

# mcrypt\_enc\_is\_block\_mode

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_enc\_is\_block\_mode — Verifica se o modo aberto produz blocos

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_enc\_is\_block\_mode**([resource](language.types.resource.md) `$td`): [bool](language.types.boolean.md)

Informa se o modo aberto produz blocos (por exemplo, **`true`** para cbc e ecb,
e **`false`** para cfb e fluxo).

### Parâmetros

`td`
:   O descritor de criptografia.

### Valor Retornado

Retorna **`true`** se o modo produz blocos de bytes,
ou **`false`** se produz apenas bytes.

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
