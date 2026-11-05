# Restaura o dimensionamento da entrada e da saída com base em parâmetros previamente calculados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-descale-train.php

---

# fann\_descale\_train

(PECL fann >= 1.0.0)

fann\_descale\_train — Restaura o dimensionamento da entrada e da saída com base em parâmetros previamente calculados

### Descrição

function **fann\_descale\_train**([resource](language.types.resource.md) `$ann`, [resource](language.types.resource.md) `$train_data`): [bool](language.types.boolean.md)

Restaura o dimensionamento da entrada e da saída com base em parâmetros previamente calculados.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`train_data`
:   [resource](language.types.resource.md) dos dados de treinamento da rede neural.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_scale\_train()](function.fann-scale-train.md) - Dimensiona entrada e saída com base em parâmetros previamente calculados
- [fann\_set\_scaling\_params()](function.fann-set-scaling-params.md) - Calcula parâmetros de entrada e saída para uso futuro com base nos dados de treinamento

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
