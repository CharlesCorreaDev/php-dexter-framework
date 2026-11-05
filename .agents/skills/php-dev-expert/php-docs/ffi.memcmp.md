# Compara áreas da memória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.memcmp.php

---

# FFI::memcmp

(PHP 7 >= 7.4.0, PHP 8)

FFI::memcmp — Compara áreas da memória

### Descrição

public static function **FFI::memcmp**([string](language.types.string.md)|[FFI\CData](class.ffi-cdata.md) `&$ptr1`, [string](language.types.string.md)|[FFI\CData](class.ffi-cdata.md) `&$ptr2`, [int](language.types.integer.md) `$size`): [int](language.types.integer.md)

Compara o número de bytes definido em `size` das áreas de memória `ptr1` e
`ptr2`. Ambos `ptr1` e `ptr2`
podem ser quaisquer estruturas de dados nativas ([FFI\CData](class.ffi-cdata.md)) ou
[string](language.types.string.md)s PHP.

### Parâmetros

`ptr1`
:   O início de uma área de memória.

`ptr2`
:   O início de outra área de memória.

`size`
:   O número de bytes a serem comparados.

### Valor Retornado

Retorna um valor menor que `0` se o conteúdo da área de memória iniciando em `ptr1`
for considerado menor que o conteúdo da área de memória iniciando em `ptr2`,
um número maior que `0` se o conteúdo da primeira área de memória for considerado maior que o segundo,
e `0` se forem iguais.

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
