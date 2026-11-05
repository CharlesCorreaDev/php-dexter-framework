# Define o algoritmo de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-training-algorithm.php

---

# fann\_set\_training\_algorithm

(PECL fann >= 1.0.0)

fann\_set\_training\_algorithm — Define o algoritmo de treinamento

### Descrição

function **fann\_set\_training\_algorithm**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$training_algorithm`): [bool](language.types.boolean.md)

Define o algoritmo de treinamento.

Mais informação disponível em [fann\_get\_training\_algorithm()](function.fann-get-training-algorithm.md).

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`training_algorithm`
:   Constante de [algoritmo de treinamento](fann.constants.md#constants.fann-train).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_training\_algorithm()](function.fann-get-training-algorithm.md) - Retorna o algoritmo de treinamento

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
