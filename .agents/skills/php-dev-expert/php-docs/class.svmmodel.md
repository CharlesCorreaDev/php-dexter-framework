# A classe SVMModel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.svmmodel.php

---

# A classe SVMModel

(PECL svm >= 0.1.0)

## Introdução

O SVMModel é o resultado final do processo de treinamento.
Ele pode ser usado para classificar dados nunca antes vistos.

## Resumo da classe

class **SVMModel**
{

/\* Métodos \*/

public function [\_\_construct](svmmodel.construct.md)([string](language.types.string.md) `$filename` = ?)

public function [checkProbabilityModel](svmmodel.checkprobabilitymodel.md)(): [bool](language.types.boolean.md)

public function [getLabels](svmmodel.getlabels.md)(): [array](language.types.array.md)

public function [getNrClass](svmmodel.getnrclass.md)(): [int](language.types.integer.md)

public function [getSvmType](svmmodel.getsvmtype.md)(): [int](language.types.integer.md)

public function [getSvrProbability](svmmodel.getsvrprobability.md)(): [float](language.types.float.md)

public function [load](svmmodel.load.md)([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

public function [predict](svmmodel.predict.md)([array](language.types.array.md) `$data`): [float](language.types.float.md)

public function [predict\_probability](svmmodel.predict-probability.md)([array](language.types.array.md) `$data`): [float](language.types.float.md)

public function [save](svmmodel.save.md)([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

}

## Índice

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
