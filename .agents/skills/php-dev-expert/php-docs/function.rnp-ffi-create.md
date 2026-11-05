# Cria o objeto de nível superior usado para interagir com a biblioteca

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-ffi-create.php

---

# rnp\_ffi\_create

(PECL rnp >= 0.1.1)

rnp\_ffi\_create — Cria o objeto de nível superior usado para interagir com a biblioteca

### Descrição

function **rnp\_ffi\_create**([string](language.types.string.md) `$pub_format`, [string](language.types.string.md) `$sec_format`): [RnpFFI](class.rnpffi.md)|[false](language.types.singleton.md)

### Parâmetros

`pub_format`
:   O formato do chaveiro público, RNP\_KEYSTORE\_GPG ou outra
    constante RNP\_KEYSTORE\_\*.

`sec_format`
:   O formato do chaveiro secreto, RNP\_KEYSTORE\_GPG ou
    outra constante RNP\_KEYSTORE\_\*.

### Valor Retornado

Retorna um objeto [RnpFFI](class.rnpffi.md) em caso de sucesso ou **`false`** em caso de falha.

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
