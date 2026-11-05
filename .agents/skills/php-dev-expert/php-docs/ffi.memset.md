# Preenche uma área de memória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.memset.php

---

# FFI::memset

(PHP 7 >= 7.4.0, PHP 8)

FFI::memset — Preenche uma área de memória

### Descrição

public static function **FFI::memset**([FFI\CData](class.ffi-cdata.md) `&$ptr`, [int](language.types.integer.md) `$value`, [int](language.types.integer.md) `$size`): [void](language.types.void.md)

Preenche, com o número de bytes informado em `size`, a área de memória apontada por
`ptr` com o valor de byte definido por `value`.

### Parâmetros

`ptr`
:   O início da área de memória a ser preenchida.

`value`
:   O byte para preenchimento.

`size`
:   O número de bytes a serem preenchidos.

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
