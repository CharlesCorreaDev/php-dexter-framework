# Embaralha o dados de treinamento, tornando a ordem aleatória

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-shuffle-train-data.php

---

# fann\_shuffle\_train\_data

(PECL fann >= 1.0.0)

fann\_shuffle\_train\_data — Embaralha o dados de treinamento, tornando a ordem aleatória

### Descrição

function **fann\_shuffle\_train\_data**([resource](language.types.resource.md) `$train_data`): [bool](language.types.boolean.md)

Embaralha o dados de treinamento, tornando a ordem aleatória. Isto é recomendado para treinamento incremental,
sendo que não terá nenhuma influência durante treinamento em lote.

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
