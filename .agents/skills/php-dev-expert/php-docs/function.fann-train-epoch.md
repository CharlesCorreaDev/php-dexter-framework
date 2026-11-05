# Treina uma época com um conjunto de dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-train-epoch.php

---

# fann\_train\_epoch

(PECL fann >= 1.0.0)

fann\_train\_epoch — Treina uma época com um conjunto de dados de treinamento

### Descrição

function **fann\_train\_epoch**([resource](language.types.resource.md) `$ann`, [resource](language.types.resource.md) `$data`): [float](language.types.float.md)

Treina uma época com os dados de treinamento armazenados em "data". Uma época é
onde todos os dados de treinamento são considerados exatamente uma vez.

Esta função retorna o erro MSE conforme é calculado antes ou durante o treinamento real.
Este não é o MSE real após a época de treinamento, mas como o cálculo dele iria requerer passar
por todo o conjunto de treinamento mais uma vez, é mais que adequado utilizar este valor durante o treinamento.

O algoritmo de treinamento usado por esta função é escolhido pela função
[fann\_set\_training\_algorithm()](function.fann-set-training-algorithm.md).

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

### Valor Retornado

O MSE, ou **`false`** em caso de erro.

### Veja também

- [fann\_train\_on\_data()](function.fann-train-on-data.md) - Treina em um conjunto de dados inteiro por um período de tempo
- [fann\_test\_data()](function.fann-test-data.md) - Testa um conjunto de dados de treinamento e calcula seu MSE
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
