# Mescla os dados de treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-merge-train-data.php

---

# fann\_merge\_train\_data

(PECL fann >= 1.0.0)

fann\_merge\_train\_data — Mescla os dados de treinamento

### Descrição

function **fann\_merge\_train\_data**([resource](language.types.resource.md) `$data1`, [resource](language.types.resource.md) `$data2`): [resource](language.types.resource.md)

Mescla os dados de data1 e data2 em um novo [resource](language.types.resource.md) de dados de treinamento.

### Parâmetros

`data1`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

`data2`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

### Valor Retornado

Novo [resource](language.types.resource.md) de dados mesclados de treinamento, ou **`false`** em caso de erro.

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
