# Obtém os rótulos nos quais o modelo foi treinado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svmmodel.getlabels.php

---

# SVMModel::getLabels

(PECL svm >= 0.1.5)

SVMModel::getLabels — Obtém os rótulos nos quais o modelo foi treinado

### Descrição

public function **SVMModel::getLabels**(): [array](language.types.array.md)

Retorna um array de rótulos com os quais o modelo foi treinado. Para modelos de regressão e uma classe
um array vazio é retornado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de rótulos.

### Veja também

- [SVMModel::getNrClass()](svmmodel.getnrclass.md) - Retorna o número de classes com as quais o modelo foi treinado

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
