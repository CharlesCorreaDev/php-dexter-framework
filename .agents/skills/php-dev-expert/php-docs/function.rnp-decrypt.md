# Descriptografa mensagem PGP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-decrypt.php

---

# rnp\_decrypt

(PECL rnp >= 0.1.1)

rnp\_decrypt — Descriptografa mensagem PGP

### Descrição

function **rnp\_decrypt**([RnpFFI](class.rnpffi.md) `$ffi`, [string](language.types.string.md) `$input`): [string](language.types.string.md)|[false](language.types.singleton.md)

As chaves privadas usadas para descriptografia devem ser carregadas no objeto FFI antes de chamar esta função.
Se a criptografia de senha tiver sido usada, o provedor de senha deverá ser definido chamando
[rnp\_ffi\_set\_pass\_provider()](function.rnp-ffi-set-pass-provider.md).

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`input`
:   Mensagem criptografada.

### Valor Retornado

Mensagem descriptografada em caso de sucesso ou **`false`** em caso de falha.

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
