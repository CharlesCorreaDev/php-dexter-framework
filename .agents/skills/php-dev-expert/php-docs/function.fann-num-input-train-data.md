# Retorna o número de entradas em cada um dos padrões de treinamento nos dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-num-input-train-data.php

---

# fann\_num\_input\_train\_data

(PECL fann >= 1.0.0)

fann\_num\_input\_train\_data — Retorna o número de entradas em cada um dos padrões de treinamento nos dados de treinamento

### Descrição

function **fann\_num\_input\_train\_data**([resource](language.types.resource.md) `$data`): [int](language.types.integer.md)

Retorna o número de entradas em cada um dos padrões de treinamento no [resource](language.types.resource.md) de dados de treinamento.

### Parâmetros

`data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

### Valor Retornado

O número de entradas, ou **`false`** em caso de erro.

### Veja também

- [fann\_length\_train\_data()](function.fann-length-train-data.md) - Retorna o número de padrões de treinamento nos dados de treinamento
- [fann\_num\_output\_train\_data()](function.fann-num-output-train-data.md) - Retorna o número de saídas em cada um dos padrões de treinamento nos dados de treinamento

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
