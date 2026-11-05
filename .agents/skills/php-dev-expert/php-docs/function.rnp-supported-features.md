# Obtém recursos suportados no formato JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-supported-features.php

---

# rnp\_supported\_features

(PECL rnp >= 0.1.1)

rnp\_supported\_features — Obtém recursos suportados no formato JSON

### Descrição

function **rnp\_supported\_features**([string](language.types.string.md) `$type`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém a string formatada em JSON contendo o array de valores de recursos RNP suportados (algoritmos, curvas, etc.) por tipo.

### Parâmetros

`type`
:   Consulte as constantes RNP\_FEATURE\_\* para valores suportados.

### Valor Retornado

String contendo array formatado em JSON com algoritmos, curvas, etc. ou **`false`** em caso de falha.

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
