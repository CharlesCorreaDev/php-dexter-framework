# Carrega chaves do caminho especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-load-keys-from-path.php

---

# rnp\_load\_keys\_from\_path

(PECL rnp >= 0.1.1)

rnp\_load\_keys\_from\_path — Carrega chaves do caminho especificado

### Descrição

function **rnp\_load\_keys\_from\_path**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$format`,  
    [string](language.types.string.md) `$input_path`,  
    [int](language.types.integer.md) `$flags`  
): [bool](language.types.boolean.md)

Observe que para G10 a entrada deve ser um diretório (que já deve existir).

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`format`
:   O formato de chave dos dados (GPG, KBX, G10).

`input_path`
:   Arquivo ou diretório contendo as chaves.

`flags`
:   Consulte a descrição das opções **`RNP_LOAD_SAVE_*`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
