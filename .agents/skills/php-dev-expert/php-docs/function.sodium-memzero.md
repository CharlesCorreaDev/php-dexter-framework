# Sobrescreve uma string com caracteres NUL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-memzero.php

---

# sodium\_memzero

(PHP 7 >= 7.2.0, PHP 8)

sodium\_memzero — Sobrescreve uma string com caracteres NUL

### Descrição

function **sodium\_memzero**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `&$string`): [void](language.types.void.md)

**sodium\_memzero()** zera a string passada por referência.

### Parâmetros

`string`
:   String.

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
