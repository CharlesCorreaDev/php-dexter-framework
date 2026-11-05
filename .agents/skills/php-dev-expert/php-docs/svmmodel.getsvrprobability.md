# Obtém o valor sigma para tipos de regressão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svmmodel.getsvrprobability.php

---

# SVMModel::getSvrProbability

(PECL svm >= 0.1.5)

SVMModel::getSvrProbability — Obtém o valor sigma para tipos de regressão

### Descrição

public function **SVMModel::getSvrProbability**(): [float](language.types.float.md)

Para modelos de regressão, retorna um valor sigma. Se não houver informações de probabilidade
ou o modelo não for SVR, 0 será retornado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um valor sigma.

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
