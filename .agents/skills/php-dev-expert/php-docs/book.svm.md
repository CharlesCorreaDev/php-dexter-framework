# Support Vector Machine

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.svm.php

---

# Support Vector Machine

# Introdução

**Aviso**

Esta extensão é
*EXPERIMENTAL*. O comportamento desta extensão, incluindo
os nomes de suas funções e qualquer outra documentação relacionada a esta
extensão, pode mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

LibSVM é uma biblioteca de soluções eficientes para problemas de classificação e regressão de SVM.
A extensão svm encapsula essa biblioteca em uma interface PHP para facilitar o uso em scripts PHP.

- [Instalação/Configuração](svm.setup.md)
  - [Dependências](svm.requirements.md)
  - [Instalação](svm.installation.md)
- [Examples](svm.examples.md)
- [SVM](class.svm.md) — A classe SVM
  - [SVM::\_\_construct](svm.construct.md) — Constrói um novo objeto SVM
  - [SVM::crossvalidate](svm.crossvalidate.md) — Testa parâmetros de treinamento em subconjuntos de dados de treinamento
  - [SVM::getOptions](svm.getoptions.md) — Retorna os parâmetros de treinamento atuais
  - [SVM::setOptions](svm.setoptions.md) — Define parâmetros de treinamento
  - [SVM::train](svm.train.md) — Cria um SVMModel com base em dados de treinamento
- [SVMModel](class.svmmodel.md) — A classe SVMModel
  - [SVMModel::checkProbabilityModel](svmmodel.checkprobabilitymodel.md) — Retorna verdadeiro se o modelo tiver informações de probabilidade
  - [SVMModel::\_\_construct](svmmodel.construct.md) — Constrói um novo SVMModel
  - [SVMModel::getLabels](svmmodel.getlabels.md) — Obtém os rótulos nos quais o modelo foi treinado
  - [SVMModel::getNrClass](svmmodel.getnrclass.md) — Retorna o número de classes com as quais o modelo foi treinado
  - [SVMModel::getSvmType](svmmodel.getsvmtype.md) — Obtém o tipo de SVM com o qual o modelo foi treinado
  - [SVMModel::getSvrProbability](svmmodel.getsvrprobability.md) — Obtém o valor sigma para tipos de regressão
  - [SVMModel::load](svmmodel.load.md) — Carrega um modelo SVM salvo
  - [SVMModel::predict](svmmodel.predict.md) — Prevê um valor para dados nunca antes vistos
  - [SVMModel::predict\_probability](svmmodel.predict-probability.md) — Retorna probabilidades de classe para dados não vistos anteriormente
  - [SVMModel::save](svmmodel.save.md) — Grava um modelo em um arquivo

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
