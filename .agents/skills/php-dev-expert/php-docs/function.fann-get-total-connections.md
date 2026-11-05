# Obtém o número total de conexões em toda a rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-total-connections.php

---

# fann\_get\_total\_connections

(PECL fann >= 1.0.0)

fann\_get\_total\_connections — Obtém o número total de conexões em toda a rede

### Descrição

function **fann\_get\_total\_connections**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

Obtém o número total de conexões em toda a rede neural.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número total de conexões em toda a rede, ou **`false`** em caso de erro.

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
