# Carrega um modelo SVM salvo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svmmodel.load.php

---

# SVMModel::load

(PECL svm >= 0.1.00.1.0)

SVMModel::load — Carrega um modelo SVM salvo

### Descrição

public function **SVMModel::load**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Carrega um arquivo de modelo pronto para classificação ou regressão.

### Parâmetros

`filename`
:   O nome do arquivo do modelo.

### Valor Retornado

Lança SVMException em caso de erro.
Retorna true em caso de sucesso.

### Veja também

- [SVMModel::save()](svmmodel.save.md) - Grava um modelo em um arquivo

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
