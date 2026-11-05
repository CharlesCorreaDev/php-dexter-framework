# Importa chaves da string PHP para o chaveiro e recebe JSON descrevendo chaves novas/atualizadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-import-keys.php

---

# rnp\_import\_keys

(PECL rnp >= 0.1.1)

rnp\_import\_keys — Importa chaves da string PHP para o chaveiro e recebe JSON descrevendo chaves novas/atualizadas

### Descrição

function **rnp\_import\_keys**([RnpFFI](class.rnpffi.md) `$ffi`, [string](language.types.string.md) `$input`, [int](language.types.integer.md) `$flags`): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`input`
:   Pacotes OpenPGP contendo chaves a serem carregadas. Pode ser binário ou blindado ASCII.

`flags`
:   Consulte as constantes predefinidas**`RNP_LOAD_SAVE_*`**.

### Valor Retornado

String JSON com informações sobre chaves novas e atualizadas em caso de sucesso ou **`false`** em caso de falha.

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
