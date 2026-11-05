# Define parâmetros de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svm.setoptions.php

---

# SVM::setOptions

(PECL svm >= 0.1.0)

SVM::setOptions — Define parâmetros de treinamento

### Descrição

public function **SVM::setOptions**([array](language.types.array.md) `$params`): [bool](language.types.boolean.md)

Define um ou mais parâmetros de treinamento.

### Parâmetros

`params`
:   Uma série de parâmetros de treinamento, baseados nas constantes SVM.

### Valor Retornado

Retorna true em caso de sucesso, lança SVMException em caso de erro.

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
