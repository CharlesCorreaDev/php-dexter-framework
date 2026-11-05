# Cria um novo objeto FFI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.cdef.php

---

# FFI::cdef

(PHP 7 >= 7.4.0, PHP 8)

FFI::cdef — Cria um novo objeto FFI

### Descrição

public static function **FFI::cdef**([string](language.types.string.md) `$code` = "", [?](language.types.null.md)[string](language.types.string.md) `$lib` = **`null`**): [FFI](class.ffi.md)

Cria um novo objeto FFI.

### Parâmetros

`code`
:   Uma string contendo uma sequência de declarações em liguagem C usual
    (tipos, estruturas, funções, variáveis etc.). Na verdade, esta string pode ser
    copiada e colada a partir de arquivos de cabeçalho C.

    > **Nota**:
    >
    > As diretivas de pré-processamento C não são suportadas, ou seja, `#include`,
    > `#define` e macros CPP não funcionam.

`lib`
:   O nome de um arquivo de biblioteca compartilhada, a ser carregado e conectado com
    as definições.

    > **Nota**:
    >
    > Se `lib` for omitido ou **`null`**, as plaraformas que suportam `RTLD_DEFAULT`
    > tentarão localizar símbolos declarados em `code` no escopo global
    > normal. Outros sistemas falharão ao tentar resolver estes símbolos.

### Valor Retornado

Retorna o objeto [FFI](class.ffi.md) criado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Funções C que retornam `void` irão retornar um tipo [null](language.types.null.md) do PHP ao invés de FFI\CType::TYPE\_VOID. |
| 8.0.0 | `lib` agora pode ser nulo. |

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
