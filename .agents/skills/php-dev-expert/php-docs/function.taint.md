# Contamina uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.taint.php

---

# taint

(PECL taint >=0.1.0)

taint — Contamina uma string

### Descrição

function **taint**([string](language.types.string.md) `&$string`, [string](language.types.string.md) `...$strings`): [bool](language.types.boolean.md)

Marca uma string como contaminada. Esta função é usada somente com propósito de testes.

### Parâmetros

`string`

`strings`

### Valor Retornado

Retorna TRUE se a transformação for concluída. Sempre retorna TRUE se a extensão Taint
não estiver habilitada.

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
