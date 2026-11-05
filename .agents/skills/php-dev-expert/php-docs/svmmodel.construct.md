# Constrói um novo SVMModel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svmmodel.construct.php

---

# SVMModel::\_\_construct

(PECL svm >= 0.1.0)

SVMModel::\_\_construct — Constrói um novo SVMModel

### Descrição

public function **SVMModel::\_\_construct**([string](language.types.string.md) `$filename` = ?)

Cria um novo SVMModel. Os modelos geralmente são criados a partir da
função SVM::train, mas os modelos salvos podem ser restaurados diretamente.

### Parâmetros

`filename`
:   O nome do arquivo do modelo salvo que este modelo deve carregar.

### Erros/Exceções

Lança uma **SVMException** em caso de erro.

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
