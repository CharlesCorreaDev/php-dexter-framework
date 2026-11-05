# Dimensiona as entradas nos dados de treinamento para a faixa especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-scale-input-train-data.php

---

# fann\_scale\_input\_train\_data

(PECL fann >= 1.0.0)

fann\_scale\_input\_train\_data — Dimensiona as entradas nos dados de treinamento para a faixa especificada

### Descrição

function **fann\_scale\_input\_train\_data**([resource](language.types.resource.md) `$train_data`, [float](language.types.float.md) `$new_min`, [float](language.types.float.md) `$new_max`): [bool](language.types.boolean.md)

Dimensiona as entradas nos dados de treinamento para a faixa especificada.

### Parâmetros

`train_data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

`new_min`
:   O novo mínimo após dimensionar as entradas nos dados de treinamento.

`new_max`
:   O novo máximo após dimensionar as entradas nos dados de treinamento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_scale\_output\_train\_data()](function.fann-scale-output-train-data.md) - Dimensiona as saídas nos dados de treinamento para uma faixa especificada
- [fann\_scale\_train\_data()](function.fann-scale-train-data.md) - Dimensiona as entradas e saídas nos dados de treinamento para a faixa especificada

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
