# Obtém o número da polarização em cada camada na rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-bias-array.php

---

# fann\_get\_bias\_array

(PECL fann >= 1.0.0)

fann\_get\_bias\_array — Obtém o número da polarização em cada camada na rede

### Descrição

function **fann\_get\_bias\_array**([resource](language.types.resource.md) `$ann`): [array](language.types.array.md)

Obtém o número da polarização em cada camada na rede.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

Um array de números de polarização em cada camada.

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
