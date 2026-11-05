# Retorna uma cópia exata de dados de treinamento de rede neural

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-duplicate-train-data.php

---

# fann\_duplicate\_train\_data

(PECL fann >= 1.0.0)

fann\_duplicate\_train\_data — Retorna uma cópia exata de dados de treinamento de rede neural

### Descrição

function **fann\_duplicate\_train\_data**([resource](language.types.resource.md) `$data`): [resource](language.types.resource.md)

Retorna uma cópia exata de um [resource](language.types.resource.md) de dados de treinamento de rede neural.

### Parâmetros

`data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

### Valor Retornado

Retorna um [resource](language.types.resource.md) de dados de treinamento em caso de sucesso ou **`false`** em caso de erro.

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
