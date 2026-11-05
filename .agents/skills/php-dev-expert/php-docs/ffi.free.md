# Libera uma estrutura de dados não gerenciada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.free.php

---

# FFI::free

(PHP 7 >= 7.4.0, PHP 8)

FFI::free — Libera uma estrutura de dados não gerenciada

### Descrição

public static function **FFI::free**([FFI\CData](class.ffi-cdata.md) `&$ptr`): [void](language.types.void.md)

Libera manualmente uma estrutura de dados não gerenciada criada anteriormente.

### Parâmetros

`ptr`
:   O identificador do ponteiro não gerenciado a um estrutura de dados C.

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
