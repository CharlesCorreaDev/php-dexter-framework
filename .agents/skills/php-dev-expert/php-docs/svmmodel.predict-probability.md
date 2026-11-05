# Retorna probabilidades de classe para dados não vistos anteriormente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svmmodel.predict-probability.php

---

# SVMModel::predict\_probability

(PECL svm >= 0.1.4)

SVMModel::predict\_probability — Retorna probabilidades de classe para dados não vistos anteriormente

### Descrição

public function **SVMModel::predict\_probability**([array](language.types.array.md) `$data`): [float](language.types.float.md)

Esta função aceita um array de dados e tenta prever a classe, como na função de previsão.
Além disso, porém, esta função retorna um array de probabilidades, uma por classe no modelo, que
representam a chance estimada de os dados fornecidos serem membros dessa classe. Requer que o modelo
a ser usado tenha sido treinado com o parâmetro de probabilidade definido como true.

### Parâmetros

`data`
:   O array a ser classificado. Deve ser uma série de pares chave => valor
    em ordem crescente de chaves, mas não necessariamente contínua.

`probabilities`
:   O valor fornecido será preenchido com as probabilidades. Este valor será nulo, no caso
    de um modelo sem informações de probabilidade, ou um array onde o índice é o nome da classe e o valor é
    a probabilidade prevista.

### Valor Retornado

Número do tipo float com o valor previsto. Este será um rótulo de classe no caso de
classificação, um valor real no caso de regressão.
Lança SVMException em caso de erro.

### Veja também

- **SVM::predict()**

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
