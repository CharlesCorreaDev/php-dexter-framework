# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.examples.php

---

# Examples

## Índice

- [Uso básico da FFI](ffi.examples-basic.md)
- [Funções de retorno PHP](ffi.examples-callback.md)
- [Um exemplo completo de PHP/FFI/pré-carregamento](ffi.examples-complete.md)

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
