# Retorna o impulso de aprendizagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-learning-momentum.php

---

# fann\_get\_learning\_momentum

(PECL fann >= 1.0.0)

fann\_get\_learning\_momentum — Retorna o impulso de aprendizagem

### Descrição

function **fann\_get\_learning\_momentum**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

O impulso de aprendizagem pode ser usado para acelerar o treinamento **`FANN_TRAIN_INCREMENTAL`**.
Um impulso muito alto não irá, entretanto, beneficiar o treinamento. Definir um impulso para zero será o mesmo que
não usar o parâmetro de impulso. O valor recomendado deste parâmetro é entre 0.0 e 1.0.

O impulso padrão é 0.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

O impulso de aprendizagem, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_learning\_momentum()](function.fann-set-learning-momentum.md) - Define o impulso de aprendizagem
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
