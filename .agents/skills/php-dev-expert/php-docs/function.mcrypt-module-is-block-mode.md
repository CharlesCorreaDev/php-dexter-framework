# Retorna se o modo especificado produz blocos ou não

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-module-is-block-mode.php

---

# mcrypt\_module\_is\_block\_mode

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_module\_is\_block\_mode — Retorna se o modo especificado produz blocos ou não

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_module\_is\_block\_mode**([string](language.types.string.md) `$mode`, [string](language.types.string.md) `$lib_dir` = ?): [bool](language.types.boolean.md)

Esta função retorna **`true`** se o modo produz blocos de bytes ou
**`false`** se produz apenas bytes. (por exemplo, **`true`** para cbc e ecb, e
**`false`** para cfb e fluxo).

### Parâmetros

`mode`
:   Uma das constantes **`MCRYPT_MODE_nome_do_modo`** ou uma das seguintes strings: "ecb", "cbc", "cfb", "ofb", "nofb" ou "stream".

`lib_dir`
:   O parâmetro opcional `lib_dir` pode conter o
    local onde o módulo de algoritmo está no sistema.

### Valor Retornado

Esta função retorna **`true`** se o modo produz blocos de bytes ou
**`false`** se produz apenas bytes. (por exemplo, **`true`** para cbc e ecb, e
**`false`** para cfb e fluxo).

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
