# Exporta uma chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-key-export.php

---

# rnp\_key\_export

(PECL rnp >= 0.1.1)

rnp\_key\_export — Exporta uma chave

### Descrição

function **rnp\_key\_export**([RnpFFI](class.rnpffi.md) `$ffi`, [string](language.types.string.md) `$key_fp`, [int](language.types.integer.md) `$flags`): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`key_fp`
:   Impressão digital da chave.

`flags`
:   Consulta as constantes predefinidas **`RNP_KEY_EXPORT_*`**
    (exceto **`RNP_KEY_EXPORT_BASE64`**).

### Valor Retornado

Pacotes OpenPGP de chaves exportadas (binárias ou ASCII blindada) em caso de sucesso ou **`false`** em caso de falha.

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
