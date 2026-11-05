# Retorna a fração de alteração de candidatos em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-candidate-change-fraction.php

---

# fann\_get\_cascade\_candidate\_change\_fraction

(PECL fann >= 1.0.0)

fann\_get\_cascade\_candidate\_change\_fraction — Retorna a fração de alteração de candidatos em cascata

### Descrição

function **fann\_get\_cascade\_candidate\_change\_fraction**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

A fração de alteração de candidatos em cascata é um número entre 0 e 1 que determina o quanto do valor de [fann\_get\_MSE()](function.fann-get-mse.md)
deve mudar dentro de [fann\_get\_cascade\_candidate\_stagnation\_epochs()](function.fann-get-cascade-candidate-stagnation-epochs.md) durante treinamento dos neurônios candidatos,
para que o treinamento não fique estagnado. Se o treinamento estagnar, o treinamento de neurônios candidatos será terminado
e o melhor candidato será selecionado.

Significa que se o MSE não mudar por uma fração de **fann\_get\_cascade\_candidate\_change\_fraction()** durante
um período de [fann\_get\_cascade\_candidate\_stagnation\_epochs()](function.fann-get-cascade-candidate-stagnation-epochs.md), o treinamento dos neurônios candidatos será paralisado
porque o treinamento terá estagnado.

Se a fração de alteração de candidatos em cascata for baixa, os neurônios candidatos serão treinados mais, e se for alta, serão treinados menos.

A fração padrão de alteração de candidato em cascata é 0.01, que equivale a 1% de alteração no MSE.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

A fração de alteração de candidatos em cascata, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_cascade\_candidate\_change\_fraction()](function.fann-set-cascade-candidate-change-fraction.md) - Define a fração de modificação de candidatos em cascata
- [fann\_get\_MSE()](function.fann-get-mse.md) - Lê o erro quadrático médio da rede
- [fann\_get\_cascade\_candidate\_stagnation\_epochs()](function.fann-get-cascade-candidate-stagnation-epochs.md) - Retorna o número de épocas de estagnação de candidatos em cascata

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
