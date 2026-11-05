# Treina em um conjunto de dados inteiro por um período de tempo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-train-on-data.php

---

# fann\_train\_on\_data

(PECL fann >= 1.0.0)

fann\_train\_on\_data — Treina em um conjunto de dados inteiro por um período de tempo

### Descrição

function **fann\_train\_on\_data**(  
    [resource](language.types.resource.md) `$ann`,  
    [resource](language.types.resource.md) `$data`,  
    [int](language.types.integer.md) `$max_epochs`,  
    [int](language.types.integer.md) `$epochs_between_reports`,  
    [float](language.types.float.md) `$desired_error`  
): [bool](language.types.boolean.md)

Treina em um conjunto de dados inteiro por um período de tempo.

Este treinamento usa o algoritmo escolhido pela função [fann\_set\_training\_algorithm()](function.fann-set-training-algorithm.md) e
os parâmetros definidos para este algoritmo.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

`max_epochs`
:   O número máximo de épocas que o treinamento deve continuar.

`epochs_between_reports`
:   O número de épocas entre a chamada de uma função de retorno. Um valor zero significa que a função do usuário não é chamada.

`desired_error`
:   A função [fann\_get\_MSE()](function.fann-get-mse.md) ou [fann\_get\_bit\_fail()](function.fann-get-bit-fail.md) desejada, dependendo da função de parada
    escolhida por [fann\_set\_train\_stop\_function()](function.fann-set-train-stop-function.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_train\_on\_file()](function.fann-train-on-file.md) - Treina em um conjunto de dados inteiro, que é lido de um arquivo, por um período de tempo
- [fann\_train\_epoch()](function.fann-train-epoch.md) - Treina uma época com um conjunto de dados de treinamento
- [fann\_get\_bit\_fail()](function.fann-get-bit-fail.md) - O número de falhas de bit
- [fann\_get\_MSE()](function.fann-get-mse.md) - Lê o erro quadrático médio da rede
- [fann\_set\_train\_stop\_function()](function.fann-set-train-stop-function.md) - Define a função de parada usada durante o treinamento
- [fann\_set\_training\_algorithm()](function.fann-set-training-algorithm.md) - Define o algoritmo de treinamento
- [fann\_set\_callback()](function.fann-set-callback.md) - Define a função de retorno para uso durante o treinamento

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
