# Descontamina strings

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.untaint.php

---

# untaint

(PECL taint >=0.1.0)

untaint — Descontamina strings

### Descrição

function **untaint**([string](language.types.string.md) `&$string`, [string](language.types.string.md) `...$strings`): [bool](language.types.boolean.md)

Descontamina strings.

### Parâmetros

`string`

`strings`

### Valor Retornado

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
