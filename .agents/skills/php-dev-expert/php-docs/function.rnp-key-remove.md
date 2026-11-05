# Remover uma chave de chaveiro(s)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-key-remove.php

---

# rnp\_key\_remove

(PECL rnp >= 0.1.1)

rnp\_key\_remove — Remover uma chave de chaveiro(s)

### Descrição

function **rnp\_key\_remove**([RnpFFI](class.rnpffi.md) `$ffi`, [string](language.types.string.md) `$key_fp`, [int](language.types.integer.md) `$flags`): [bool](language.types.boolean.md)

Nota: é necessário chamar [rnp\_save\_keys()](function.rnp-save-keys.md) para gravar o(s) chaveiro(s) atualizado(s).

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`key_fp`
:   Impressão digital da chave.

`flags`
:   Consulte as constantes **`RNP_KEY_REMOVE_*`**. A opção **`RNP_KEY_REMOVE_SUBKEYS`** funcionará somente para
    a chave primária e também removerá todas as suas subchaves.

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
