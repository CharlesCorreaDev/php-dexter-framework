# Obtém o número total de neurônios em toda a rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-total-neurons.php

---

# fann\_get\_total\_neurons

(PECL fann >= 1.0.0)

fann\_get\_total\_neurons — Obtém o número total de neurônios em toda a rede

### Descrição

function **fann\_get\_total\_neurons**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

Obtém o número total de neurônios em toda a rede neural. Este número também inclui os neurônios de polarização,
portanto uma rede 2-4-2 tem 2+4+2 +2(polarização) = 10 neurônios.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número total de neurônios em toda a rede, ou **`false`** em caso de erro.

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
