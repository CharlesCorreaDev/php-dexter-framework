# Cria um ponteiro não gerenciado para dado C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.addr.php

---

# FFI::addr

(PHP 7 >= 7.4.0, PHP 8)

FFI::addr — Cria um ponteiro não gerenciado para dado C

### Descrição

public static function **FFI::addr**([FFI\CData](class.ffi-cdata.md) `&$ptr`): [FFI\CData](class.ffi-cdata.md)

Cria um ponteiro não gerenciado para o dado C representado pelo
[FFI\CData](class.ffi-cdata.md) informado. O ponteiro de origem `ptr` precisa sobreviver ao
ponteiro resultante. Esta função é útil principalmente para passar argumentos para funções C através de ponteiro.

### Parâmetros

`ptr`
:   O identificador do ponteiro para uma estrutura de dado C.

### Valor Retornado

Retorna o objeto [FFI\CData](class.ffi-cdata.md) recentemente criado.

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
