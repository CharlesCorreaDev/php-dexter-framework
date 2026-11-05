# Obtém o FFI\CType de FFI\CData

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.typeof.php

---

# FFI::typeof

(PHP 7 >= 7.4.0, PHP 8)

FFI::typeof — Obtém o FFI\CType de FFI\CData

### Descrição

public static function **FFI::typeof**([FFI\CData](class.ffi-cdata.md) `&$ptr`): [FFI\CType](class.ffi-ctype.md)

Obtém o objeto [FFI\CType](class.ffi-ctype.md) que representa o tipo do objeto
[FFI\CData](class.ffi-cdata.md) fornecido.

### Parâmetros

`ptr`
:   O identificador do ponteiro para uma estrutura de dados C.

### Valor Retornado

Retorna o objeto [FFI\CType](class.ffi-ctype.md) que representa o tipo
do objeto [FFI\CData](class.ffi-cdata.md) fornecido.

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
