# Verifica se uma string está contaminada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-tainted.php

---

# is\_tainted

(PECL taint >=0.1.0)

is\_tainted — Verifica se uma string está contaminada

### Descrição

function **is\_tainted**([string](language.types.string.md) `$string`): [bool](language.types.boolean.md)

Verifica se uma string está contaminada.

### Parâmetros

`string`

### Valor Retornado

Retorna TRUE se a string estiver contaminada, FALSE caso contrário.

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
