# Define o impulso de aprendizagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-learning-momentum.php

---

# fann\_set\_learning\_momentum

(PECL fann >= 1.0.0)

fann\_set\_learning\_momentum — Define o impulso de aprendizagem

### Descrição

function **fann\_set\_learning\_momentum**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$learning_momentum`): [bool](language.types.boolean.md)

Define o impulso de aprendizagem.

Mais informação disponível em [fann\_get\_learning\_momentum()](function.fann-get-learning-momentum.md).

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`learning_momentum`
:   O impulso de aprendizagem.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_learning\_momentum()](function.fann-get-learning-momentum.md) - Retorna o impulso de aprendizagem
- [fann\_set\_training\_algorithm()](function.fann-set-training-algorithm.md) - Define o algoritmo de treinamento

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
