# Instancia um objeto FFI com declarações C analisadas durante o pré-carregamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.scope.php

---

# FFI::scope

(PHP 7 >= 7.4.0, PHP 8)

FFI::scope — Instancia um objeto FFI com declarações C analisadas durante o pré-carregamento

### Descrição

public static function **FFI::scope**([string](language.types.string.md) `$name`): [FFI](class.ffi.md)

Instancia um objeto FFI com declarações C analisadas durante o pré-carregamento.

O método **FFI::scope()** é seguro para ser chamado várias vezes para o mesmo escopo. Várias referências ao
mesmo escopo podem ser carregadas ao mesmo tempo.

### Parâmetros

`name`
:   O nome do escopo definido por uma definição especial `FFI_SCOPE`.

### Valor Retornado

Retorna o objeto [FFI](class.ffi.md) recém-criado.

### Veja também

- [FFI::load()](ffi.load.md) - Carrega declarações C a partir de um arquivo de cabeçalho

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
