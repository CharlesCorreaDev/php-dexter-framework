# Importa assinaturas independentes para o chaveiro e recebe JSON descrevendo chaves atualizadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-import-signatures.php

---

# rnp\_import\_signatures

(PECL rnp >= 0.1.1)

rnp\_import\_signatures — Importa assinaturas independentes para o chaveiro e recebe JSON descrevendo chaves atualizadas

### Descrição

function **rnp\_import\_signatures**([RnpFFI](class.rnpffi.md) `$ffi`, [string](language.types.string.md) `$input`, [int](language.types.integer.md) `$flags`): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`input`
:   Pacotes OpenPGP contendo assinaturas a serem importadas. Pode ser binário ou blindado ASCII.

`flags`
:   Atualmente precisar ser 0.

### Valor Retornado

String JSON com informações sobre chaves atualizadas em caso de sucesso ou **`false`** em caso de falha.

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
