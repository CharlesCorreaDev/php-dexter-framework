# Fornece a cada conexão um peso aleatório entre um mínimo e um máximo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-randomize-weights.php

---

# fann\_randomize\_weights

(PECL fann >= 1.0.0)

fann\_randomize\_weights — Fornece a cada conexão um peso aleatório entre um mínimo e um máximo

### Descrição

function **fann\_randomize\_weights**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$min_weight`, [float](language.types.float.md) `$max_weight`): [bool](language.types.boolean.md)

Fornece a cada conexão um peso aleatório entre o mínimo (`min_weight`) e o máximo (`max_weight`).

Inicialmente, os pesos são aleatórios entre -0.1 e 0.1.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`min_weight`
:   Mínimo valor de peso

`max_weight`
:   Máximo valor de peso

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_init\_weights()](function.fann-init-weights.md) - Inicializa os pesos usando o algoritmo de Widrow + Nguyen

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
