# Grava um modelo em um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svmmodel.save.php

---

# SVMModel::save

(PECL svm >= 0.1.0)

SVMModel::save — Grava um modelo em um arquivo

### Descrição

public function **SVMModel::save**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Grava os dados do modelo em um arquivo para uso posterior.

### Parâmetros

`filename`
:   O arquivo no qual o modelo será gravado.

### Valor Retornado

Lança SVMException em caso de erro.
Retorna true em caso de sucesso.

### Veja também

- [SVMModel::load()](svmmodel.load.md) - Carrega um modelo SVM salvo

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
