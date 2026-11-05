# Carrega declarações C a partir de um arquivo de cabeçalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.load.php

---

# FFI::load

(PHP 7 >= 7.4.0, PHP 8)

FFI::load — Carrega declarações C a partir de um arquivo de cabeçalho

### Descrição

public static function **FFI::load**([string](language.types.string.md) `$filename`): [?](language.types.null.md)[FFI](class.ffi.md)

Carrega declarações C a partir de um arquivo de cabeçalho. É possível especificar bibliotecas compartilhadas que devem ser carregadas,
usando definições especiais `FFI_LIB` no arquivo de cabeçalho carregado.

### Parâmetros

`filename`
:   O nome de um arquivo de cabeçalho C.

    Diretivas de pré-processamento C não são suportadas, ou seja, `#include`,
    `#define` e macros CPP não funcionam, exceto para casos especiais
    listados abaixo.

    O arquivo de cabeçalho *deveria* conter uma declaração `#define` para a
    variável `FFI_SCOPE`, ex.: `#define FFI_SCOPE "MYLIB"`.
    Refira à [introdução desta classe](class.ffi.md#ffi.intro) para detalhes.

    O arquivo de cabeçalho *pode* conter uma declaração `#define` para a
    variável `FFI_LIB` para especificar a biblioteca que a ser exposta. Se for
    uma biblioteca de sistema, apenas o nome é necessário, ex.: `#define FFI_LIB
    "libc.so.6"`. Se for uma biblioteca customizada, um caminho relativo é necessário,
    ex.: `#define FFI_LIB "./mylib.so"`.

### Valor Retornado

Retorna o objeto [FFI](class.ffi.md) recém criado ou **`null`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | **FFI::load()** agora é permitido em [scripts de pré-carregamento](opcache.preloading.md) quando o usuário de sistema atual é o mesmo que foi definido na diretiva de configuração `opcache.preload_user`. |

### Veja também

- [FFI::scope()](ffi.scope.md) - Instancia um objeto FFI com declarações C analisadas durante o pré-carregamento

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
