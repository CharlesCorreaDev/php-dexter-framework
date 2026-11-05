# Cria uma string PHP a partir de uma área de memória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.string.php

---

# FFI::string

(PHP 7 >= 7.4.0, PHP 8)

FFI::string — Cria uma string PHP a partir de uma área de memória

### Descrição

public static function **FFI::string**([FFI\CData](class.ffi-cdata.md) `&$ptr`, [?](language.types.null.md)[int](language.types.integer.md) `$size` = **`null`**): [string](language.types.string.md)

Cria uma [string](language.types.string.md) PHP com o número de bytes informados em `size` a partir da área de
memória apontada por `ptr`.

### Parâmetros

`ptr`
:   O início da área de memória a partir da qual será criada uma [string](language.types.string.md).

`size`
:   O número de bytes a serem copiados para a [string](language.types.string.md).
    Se `size` for omitido ou **`null`**, `ptr` deverá ser um array de
    `char` C terminado em zero.

### Valor Retornado

A [string](language.types.string.md) recém-criada do PHP.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `size` agora pode ser nulo; anteriormente seu padrão era `0`. |

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
