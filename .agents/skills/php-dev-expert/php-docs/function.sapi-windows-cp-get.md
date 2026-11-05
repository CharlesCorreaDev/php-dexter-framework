# Obtém o código de página atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sapi-windows-cp-get.php

---

# sapi\_windows\_cp\_get

(PHP 7 >= 7.1.0, PHP 8)

sapi\_windows\_cp\_get — Obtém o código de página atual

### Descrição

function **sapi\_windows\_cp\_get**([string](language.types.string.md) `$kind` = ""): [int](language.types.integer.md)

Obtém o código de página atual.

### Parâmetros

`kind`
:   O tipo de código de página do sistema operacional a se obter,
    pode ser `'ansi'` ou `'oem'`.
    Qualquer outro valor refere-se ao código de páginal atual do processo.

### Valor Retornado

Se `kind` for `'ansi'`,
o código de página ANSI atual do sistema operacional é retornado.
Se `kind` for `'oem'`,
o código de página OEM do sistema operacional é retornado.
Caso contrário, o código de página atual do processo é retornado.

### Veja também

- [sapi\_windows\_cp\_set()](function.sapi-windows-cp-set.md) - Define o código de página do processo

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
