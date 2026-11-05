# Incrementa um número grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-increment.php

---

# sodium\_increment

(PHP 7 >= 7.2.0, PHP 8)

sodium\_increment — Incrementa um número grande

### Descrição

function **sodium\_increment**([string](language.types.string.md) `&$string`): [void](language.types.void.md)

Trata a string como um inteiro little-endian sem sinal, então aumente-o em 1.
Tempo constante.

### Parâmetros

`string`
:   String para incrementar.

### Valor Retornado

Nenhum valor é retornado.

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
