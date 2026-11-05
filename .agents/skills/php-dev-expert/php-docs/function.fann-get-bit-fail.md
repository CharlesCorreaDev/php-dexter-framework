# O número de falhas de bit

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-bit-fail.php

---

# fann\_get\_bit\_fail

(PECL fann >= 1.0.0)

fann\_get\_bit\_fail — O número de falhas de bit

### Descrição

function **fann\_get\_bit\_fail**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

O número de bits falhados; significa o número de neurônios de saída que diferem mais que o limite de falha de bit
(consulte [fann\_get\_bit\_fail\_limit()](function.fann-get-bit-fail-limit.md), [fann\_set\_bit\_fail\_limit()](function.fann-set-bit-fail-limit.md)).
Os bits são contados em todo o conjunto de dados de treinamento, portando este número pode ser maior que o número de dados de treinamento.

Este valor é redefinido por [fann\_reset\_MSE()](function.fann-reset-mse.md) e atualizado por todas as mesmas funções
que também atualizam o valor de MSE (ex.: [fann\_test\_data()](function.fann-test-data.md), [fann\_train\_epoch()](function.fann-train-epoch.md))

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número de bits falhados, ou **`false`** em caso de erro.

### Veja também

- [fann\_get\_MSE()](function.fann-get-mse.md) - Lê o erro quadrático médio da rede
- [fann\_reset\_MSE()](function.fann-reset-mse.md) - Redefine o erro quadrático médio da rede
- [fann\_test\_data()](function.fann-test-data.md) - Testa um conjunto de dados de treinamento e calcula seu MSE
- [fann\_train\_epoch()](function.fann-train-epoch.md) - Treina uma época com um conjunto de dados de treinamento
- [fann\_get\_bit\_fail\_limit()](function.fann-get-bit-fail-limit.md) - Retorna o limite de falha de bit usado durante o treinamento
- [fann\_set\_bit\_fail\_limit()](function.fann-set-bit-fail-limit.md) - Define o limite de falhas de bit usado durante o treinamento

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
