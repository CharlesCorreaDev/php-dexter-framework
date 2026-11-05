# Obtém o número de neurônios de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-num-output.php

---

# fann\_get\_num\_output

(PECL fann >= 1.0.0)

fann\_get\_num\_output — Obtém o número de neurônios de saída

### Descrição

function **fann\_get\_num\_output**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

Obtém o número de neurônios de saída.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número de neurônios de saída, ou **`false`** em caso de erro.

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
