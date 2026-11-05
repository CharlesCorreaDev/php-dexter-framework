# Retorna o algoritmo de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-training-algorithm.php

---

# fann\_get\_training\_algorithm

(PECL fann >= 1.0.0)

fann\_get\_training\_algorithm — Retorna o algoritmo de treinamento

### Descrição

function **fann\_get\_training\_algorithm**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

Retorna o algoritmo de treinamento. Este algortimo é usada pela função [fann\_train\_on\_data()](function.fann-train-on-data.md) e associadas.

Observe que este algoritmo é usado também durante [fann\_cascadetrain\_on\_data()](function.fann-cascadetrain-on-data.md), embora somente
**`FANN_TRAIN_RPROP`** e **`FANN_TRAIN_QUICKPROP`** sejam permitidas durante treinamento em cascata.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

Constante de [algoritmo de treinamento](fann.constants.md#constants.fann-train), ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_training\_algorithm()](function.fann-set-training-algorithm.md) - Define o algoritmo de treinamento

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
