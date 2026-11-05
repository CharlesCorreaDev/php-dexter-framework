# Retorna o número de épocas de estagnação de candidatos em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-candidate-stagnation-epochs.php

---

# fann\_get\_cascade\_candidate\_stagnation\_epochs

(PECL fann >= 1.0.0)

fann\_get\_cascade\_candidate\_stagnation\_epochs — Retorna o número de épocas de estagnação de candidatos em cascata

### Descrição

function **fann\_get\_cascade\_candidate\_stagnation\_epochs**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

O número de épocas de estagnação de candidatos em cascata determina o número de épocas em que o treinamento pode continuar
sem alterar o MSE por uma fração de [fann\_get\_cascade\_candidate\_change\_fraction()](function.fann-get-cascade-candidate-change-fraction.md).

Veja mais sobre este parâmetro em [fann\_get\_cascade\_candidate\_change\_fraction()](function.fann-get-cascade-candidate-change-fraction.md).

O número padrão de épocas de estagnação de candidatos em cascata é 12.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número de épocas de estagnação de candidatos em cascata, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_cascade\_candidate\_stagnation\_epochs()](function.fann-set-cascade-candidate-stagnation-epochs.md) - Define o número de épocas de estagnação de candidatos em cascata
- [fann\_get\_cascade\_candidate\_change\_fraction()](function.fann-get-cascade-candidate-change-fraction.md) - Retorna a fração de alteração de candidatos em cascata

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
