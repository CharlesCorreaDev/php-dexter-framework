# Despejar informações de fluxo de pacotes OpenPGP para a string JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-dump-packets-to-json.php

---

# rnp\_dump\_packets\_to\_json

(PECL rnp >= 0.1.1)

rnp\_dump\_packets\_to\_json — Despejar informações de fluxo de pacotes OpenPGP para a string JSON

### Descrição

function **rnp\_dump\_packets\_to\_json**([string](language.types.string.md) `$input`, [int](language.types.integer.md) `$flags`): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`input`
:   String de entrada contendo dados OpenPGP, em formato binário ou blindado ASCII.

`flags`
:   Consulte as constantes predefinidas **`RNP_JSON_DUMP_*`**.

### Valor Retornado

String JSON com dados despejados ou **`false`** em caso de falha.

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
