# Salva chaves no caminho especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-save-keys-to-path.php

---

# rnp\_save\_keys\_to\_path

(PECL rnp >= 0.1.1)

rnp\_save\_keys\_to\_path — Salva chaves no caminho especificado

### Descrição

function **rnp\_save\_keys\_to\_path**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$format`,  
    [string](language.types.string.md) `$output_path`,  
    [int](language.types.integer.md) `$flags`  
): [bool](language.types.boolean.md)

Salva as chaves presentes no objeto FFI (carregado ou gerado) no arquivo ou diretório especificado.

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`format`
:   O formato de chave dos dados (GPG, KBX, G10).

`output_path`
:   Caminho do arquivo ou diretório onde as chaves devem ser salvas.

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
