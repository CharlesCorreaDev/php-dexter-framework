# Retorna o número de padrões de treinamento nos dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-length-train-data.php

---

# fann\_length\_train\_data

(PECL fann >= 1.0.0)

fann\_length\_train\_data — Retorna o número de padrões de treinamento nos dados de treinamento

### Descrição

function **fann\_length\_train\_data**([resource](language.types.resource.md) `$data`): [int](language.types.integer.md)

Retorna o número de padrões de treinamento no [resource](language.types.resource.md) dos dados de treinamento.

### Parâmetros

`data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

### Valor Retornado

Número de elementos no [resource](language.types.resource.md) dos dados de treinamento, ou **`false`** em caso de erro.

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
