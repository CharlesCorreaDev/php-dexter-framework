# Copia uma área da memória para outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.memcpy.php

---

# FFI::memcpy

(PHP 7 >= 7.4.0, PHP 8)

FFI::memcpy — Copia uma área da memória para outra

### Descrição

public static function **FFI::memcpy**([FFI\CData](class.ffi-cdata.md) `&$to`, [FFI\CData](class.ffi-cdata.md)|[string](language.types.string.md) `&$from`, [int](language.types.integer.md) `$size`): [void](language.types.void.md)

Copia o número de bytes informado em `size` da área de memória `from`
para a área de memória `to`.

### Parâmetros

`to`
:   O início da área de memória de destino da cópia.

`from`
:   O início da área de memória de origem da cópia.

`size`
:   O número de bytes a serem copiados.

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
