# Obtém o número de neurônios em cada camada na rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-layer-array.php

---

# fann\_get\_layer\_array

(PECL fann >= 1.0.0)

fann\_get\_layer\_array — Obtém o número de neurônios em cada camada na rede

### Descrição

function **fann\_get\_layer\_array**([resource](language.types.resource.md) `$ann`): [array](language.types.array.md)

Obtém o número de neurônios em cada camada na rede neural.

A polarização não é incluída para que as camadas correspondam às funções fann\_create.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

Um array de números de neurônios em cada camada.

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
