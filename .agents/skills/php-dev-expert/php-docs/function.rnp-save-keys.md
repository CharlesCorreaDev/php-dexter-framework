# Salva chaves em string PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-save-keys.php

---

# rnp\_save\_keys

(PECL rnp >= 0.1.1)

rnp\_save\_keys — Salva chaves em string PHP

### Descrição

function **rnp\_save\_keys**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$format`,  
    [string](language.types.string.md) `&$output`,  
    [int](language.types.integer.md) `$flags`  
): [bool](language.types.boolean.md)

Observe que para G10, a saída deve ser um diretório (que já deve existir).

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`format`
:   O formato de chave dos dados (GPG, KBX, G10).

`output`
:   Pacotes de chave serão salvos na string referenciada por `output`.

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
