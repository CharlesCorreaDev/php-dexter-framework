# Enumera todas as chaves presentes em um chaveiro por tipo de identificador especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-list-keys.php

---

# rnp\_list\_keys

(PECL rnp >= 0.1.1)

rnp\_list\_keys — Enumera todas as chaves presentes em um chaveiro por tipo de identificador especificado

### Descrição

function **rnp\_list\_keys**([RnpFFI](class.rnpffi.md) `$ffi`, [string](language.types.string.md) `$identifier_type`): [array](language.types.array.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`identifier_type`
:   Tipo de identificador de chave ("userid", "keyid", "grip", "fingerprint").

### Valor Retornado

Um array associativo onde a chave é uma string identificadora e o valor é uma impressão digital da chave PGP ou **`false`** em caso de falha.

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
