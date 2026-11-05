# Treina um conjunto de dados inteiro, por um período de tempo, usando o algoritmo de treinamento Cascade2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-cascadetrain-on-data.php

---

# fann\_cascadetrain\_on\_data

(PECL fann >= 1.0.0)

fann\_cascadetrain\_on\_data — Treina um conjunto de dados inteiro, por um período de tempo, usando o algoritmo de treinamento Cascade2

### Descrição

function **fann\_cascadetrain\_on\_data**(  
    [resource](language.types.resource.md) `$ann`,  
    [resource](language.types.resource.md) `$data`,  
    [int](language.types.integer.md) `$max_neurons`,  
    [int](language.types.integer.md) `$neurons_between_reports`,  
    [float](language.types.float.md) `$desired_error`  
): [bool](language.types.boolean.md)

A fração de mudança de saída em cascata é um número entre 0 e 1 que determina o tamanho da fração
que o valor [fann\_get\_MSE()](function.fann-get-mse.md) deve mudar dentro de [fann\_get\_cascade\_output\_stagnation\_epochs()](function.fann-get-cascade-output-stagnation-epochs.md)
durante o treinamento das conexões de saída, para que o treinamento não fique estagnado. Se o treinamento estagnar,
o treinamento das conexões de saída será encerrado e novos candidatos serão preparados.

Este treinamento usa os parâmetros definidos usando fann\_set\_cascade\_..., mas também usa outro algoritmo de treinamento
como seu algoritmo de treinamento interno. Este algoritmo pode ser definido como **`FANN_TRAIN_RPROP`** ou
**`FANN_TRAIN_QUICKPROP`** por [fann\_set\_training\_algorithm()](function.fann-set-training-algorithm.md), e os parâmetros
definidos para esses algoritmos de treinamento também afetarão o treinamento em cascata.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

`max_neurons`
:   O número máximo de neurônios a serem adicionados à rede neural.

`neurons_between_reports`
:   O número de neurônios entre apresentações de um relatório de status. Um valor zero significa que nenhum relatório deve ser apresentado.

`desired_error`
:   A função [fann\_get\_MSE()](function.fann-get-mse.md) ou [fann\_get\_bit\_fail()](function.fann-get-bit-fail.md),
    dependendo de qual função de parada é escolhida por [fann\_set\_train\_stop\_function()](function.fann-set-train-stop-function.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_train\_on\_data()](function.fann-train-on-data.md) - Treina em um conjunto de dados inteiro por um período de tempo
- [fann\_cascadetrain\_on\_file()](function.fann-cascadetrain-on-file.md) - Treina em um conjunto de dados inteiro lido do arquivo, por um período de tempo usando o algoritmo de treinamento Cascade2

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
