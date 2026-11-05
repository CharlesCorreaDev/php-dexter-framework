# Carrega chaves da string PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-load-keys.php

---

# rnp\_load\_keys

(PECL rnp >= 0.1.1)

rnp\_load\_keys — Carrega chaves da string PHP

### Descrição

function **rnp\_load\_keys**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$format`,  
    [string](language.types.string.md) `$input`,  
    [int](language.types.integer.md) `$flags`  
): [bool](language.types.boolean.md)

Observe que para G10 a entrada deve ser um diretório (que já deve existir).

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`format`
:   O formato de chave dos dados (GPG, KBX, G10).

`input`
:   Pacotes OpenPGP contendo chaves a serem carregadas. Pode ser binário ou blindado ASCII.

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
