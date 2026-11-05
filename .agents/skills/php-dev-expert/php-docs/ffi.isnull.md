# Verifica se um FFI\CData é um ponteiro nulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.isnull.php

---

# FFI::isNull

(PHP 7 >= 7.4.0, PHP 8)

FFI::isNull — Verifica se um FFI\CData é um ponteiro nulo

### Descrição

public static function **FFI::isNull**([FFI\CData](class.ffi-cdata.md) `&$ptr`): [bool](language.types.boolean.md)

Verifica se um FFI\CData é um ponteiro nulo.

### Parâmetros

`ptr`
:   O identificador do ponteiro a uma estrutura de dados C.

### Valor Retornado

Retorna se [FFI\CData](class.ffi-cdata.md) é um ponteiro nulo.

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
