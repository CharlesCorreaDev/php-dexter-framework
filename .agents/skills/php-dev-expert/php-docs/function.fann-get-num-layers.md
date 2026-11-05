# Obtém o número de camadas na rede neural

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-num-layers.php

---

# fann\_get\_num\_layers

(PECL fann >= 1.0.0)

fann\_get\_num\_layers — Obtém o número de camadas na rede neural

### Descrição

function **fann\_get\_num\_layers**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

Obtém o número de camadas na rede neural.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número de camadas na rede neural, ou **`false`** em caso de erro.

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
