# Procura a chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-locate-key.php

---

# rnp\_locate\_key

(PECL rnp >= 0.1.1)

rnp\_locate\_key — Procura a chave

### Descrição

function **rnp\_locate\_key**([RnpFFI](class.rnpffi.md) `$ffi`, [string](language.types.string.md) `$identifier_type`, [string](language.types.string.md) `$identifier`): [string](language.types.string.md)|[false](language.types.singleton.md)

Nota: apenas IDs de usuário válidos são verificados durante a pesquisa por ID de usuário.

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`identifier_type`
:   String do tipo de identificador: "userid", "keyid", "fingerprint", "grip".

`identifier`
:   ID de usuário PGP (nome e e-mail) para o tipo "userid", string hexadecimal
    que representa o ID da chave, impressão digital ou controle de chave.

### Valor Retornado

Retorna a impressão digital hexadecimal da chave encontrada em caso de sucesso ou **`false`** em caso de falha.

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
