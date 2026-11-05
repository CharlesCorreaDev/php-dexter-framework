# Obtém o alinhamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.alignof.php

---

# FFI::alignof

(PHP 7 >= 7.4.0, PHP 8)

FFI::alignof — Obtém o alinhamento

### Descrição

public static function **FFI::alignof**([FFI\CData](class.ffi-cdata.md)|[FFI\CType](class.ffi-ctype.md) `&$ptr`): [int](language.types.integer.md)

Obtém o alinhamento do objeto [FFI\CData](class.ffi-cdata.md) ou
[FFI\CType](class.ffi-ctype.md) informado.

### Parâmetros

`ptr`
:   O identificador do dado ou do tipo C.

### Valor Retornado

Retorna o alinhamento do objeto [FFI\CData](class.ffi-cdata.md) ou
[FFI\CType](class.ffi-ctype.md) informado.

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
