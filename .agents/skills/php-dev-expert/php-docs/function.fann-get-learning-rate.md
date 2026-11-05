# Retorna a taxa de aprendizagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-learning-rate.php

---

# fann\_get\_learning\_rate

(PECL fann >= 1.0.0)

fann\_get\_learning\_rate — Retorna a taxa de aprendizagem

### Descrição

function **fann\_get\_learning\_rate**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

A taxa de aprendizagem é usada para determinar o quão agressivo o treinamento deveria ser para alguns do algoritmos de treinamento
(**`FANN_TRAIN_INCREMENTAL`**, **`FANN_TRAIN_BATCH`** ou **`FANN_TRAIN_QUICKPROP`**).
No entanto, observe que ela não é usada no treinamento **`FANN_TRAIN_RPROP`**.

A taxa padrão de aprendizagem é 0.7.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

A taxa de aprendizagem, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_learning\_rate()](function.fann-set-learning-rate.md) - Define a taxa de aprendizagem
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
