# Obtém o número de neurônios de entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-num-input.php

---

# fann\_get\_num\_input

(PECL fann >= 1.0.0)

fann\_get\_num\_input — Obtém o número de neurônios de entrada

### Descrição

function **fann\_get\_num\_input**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

Obtém o número de neurônios de entrada.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

Número de neurônios de entrada, ou **`false`** em caso de erro.

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
