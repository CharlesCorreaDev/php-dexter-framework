# Prevê um valor para dados nunca antes vistos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svmmodel.predict.php

---

# SVMModel::predict

(PECL svm >= 0.1.0)

SVMModel::predict — Prevê um valor para dados nunca antes vistos

### Descrição

public function **SVMModel::predict**([array](language.types.array.md) `$data`): [float](language.types.float.md)

Esta função aceita um array de dados e tenta prever a classe
ou o valor de regressão com base no modelo extraído de dados previamente treinados.

### Parâmetros

`data`
:   O array a ser classificado. Deve ser uma série de pares chave => valor
    em ordem crescente de chaves, mas não necessariamente contínua.

### Valor Retornado

Número do tipo float com o valor previsto. Este será um rótulo de classe no caso de
classificação, um valor real no caso de regressão.
Lança SVMException em caso de erro.

### Veja também

- [SVM::train()](svm.train.md) - Cria um SVMModel com base em dados de treinamento

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
