# Obtém o tipo da rede neural em que ela foi criada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-network-type.php

---

# fann\_get\_network\_type

(PECL fann >= 1.0.0)

fann\_get\_network\_type — Obtém o tipo da rede neural em que ela foi criada

### Descrição

function **fann\_get\_network\_type**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

Obtém o tipo da rede neural em que ela foi criada.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

Constante de [tipo de rede](fann.constants.md#constants.fann-nettype), ou **`false`** em caso de erro.

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
