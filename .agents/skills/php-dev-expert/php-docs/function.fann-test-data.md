# Testa um conjunto de dados de treinamento e calcula seu MSE

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-test-data.php

---

# fann\_test\_data

(PECL fann >= 1.0.0)

fann\_test\_data — Testa um conjunto de dados de treinamento e calcula seu MSE

### Descrição

function **fann\_test\_data**([resource](language.types.resource.md) `$ann`, [resource](language.types.resource.md) `$data`): [float](language.types.float.md)

Testa um conjunto de dados de treinamento e calcula seu MSE.

Esta função atualiza o MSE e os valores de falhas de bit.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

### Valor Retornado

O MSE atualizado, ou **`false`** em caso de erro.

### Veja também

- [fann\_train\_on\_data()](function.fann-train-on-data.md) - Treina em um conjunto de dados inteiro por um período de tempo
- [fann\_train\_epoch()](function.fann-train-epoch.md) - Treina uma época com um conjunto de dados de treinamento
- [fann\_get\_bit\_fail()](function.fann-get-bit-fail.md) - O número de falhas de bit
- [fann\_get\_MSE()](function.fann-get-mse.md) - Lê o erro quadrático médio da rede
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
