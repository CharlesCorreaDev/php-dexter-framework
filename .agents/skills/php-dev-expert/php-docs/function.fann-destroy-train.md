# Destrói os dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-destroy-train.php

---

# fann\_destroy\_train

(PECL fann >= 1.0.0)

fann\_destroy\_train — Destrói os dados de treinamento

### Descrição

function **fann\_destroy\_train**([resource](language.types.resource.md) `$train_data`): [bool](language.types.boolean.md)

Destrói os dados de treinamento.

### Parâmetros

`train_data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

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
