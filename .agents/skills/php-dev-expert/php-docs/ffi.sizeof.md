# Obtém o tamanho do dado ou tipo C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.sizeof.php

---

# FFI::sizeof

(PHP 7 >= 7.4.0, PHP 8)

FFI::sizeof — Obtém o tamanho do dado ou tipo C

### Descrição

public static function **FFI::sizeof**([FFI\CData](class.ffi-cdata.md)|[FFI\CType](class.ffi-ctype.md) `&$ptr`): [int](language.types.integer.md)

Retorna o tamanho do objeto [FFI\CData](class.ffi-cdata.md) ou
[FFI\CType](class.ffi-ctype.md) fornecido.

### Parâmetros

`ptr`
:   O identificador do dado ou tipo C.

### Valor Retornado

O tamanho da área de memória apontada por `ptr`.

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
