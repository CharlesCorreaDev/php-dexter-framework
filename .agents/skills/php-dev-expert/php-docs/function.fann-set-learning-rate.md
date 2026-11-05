# Define a taxa de aprendizagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-learning-rate.php

---

# fann\_set\_learning\_rate

(PECL fann >= 1.0.0)

fann\_set\_learning\_rate — Define a taxa de aprendizagem

### Descrição

function **fann\_set\_learning\_rate**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$learning_rate`): [bool](language.types.boolean.md)

Define a taxa de aprendizagem.

Mais informação em [fann\_get\_learning\_rate()](function.fann-get-learning-rate.md).

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`learning_rate`
:   A taxa de aprendizagem.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_learning\_rate()](function.fann-get-learning-rate.md) - Retorna a taxa de aprendizagem
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
