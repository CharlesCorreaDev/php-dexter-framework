# Retorna a fração de alteração da saída em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-output-change-fraction.php

---

# fann\_get\_cascade\_output\_change\_fraction

(PECL fann >= 1.0.0)

fann\_get\_cascade\_output\_change\_fraction — Retorna a fração de alteração da saída em cascata

### Descrição

function **fann\_get\_cascade\_output\_change\_fraction**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

A fração de mudança de saída em cascata é um número entre 0 e 1 que determina que fração do valor [fann\_get\_MSE()](function.fann-get-mse.md)
deve mudar dentro de [fann\_get\_cascade\_output\_stagnation\_epochs()](function.fann-get-cascade-output-stagnation-epochs.md) durante o treinamento das conexões de saída,
para que o treinamento não fique estagnado. Se estagnar, o treinamento das conexões de saída
será encerrado e novos candidatos serão preparados.

Isso significa que se o MSE não mudar em uma fração de **fann\_get\_cascade\_output\_change\_fraction()** durante
um período de [fann\_get\_cascade\_output\_stagnation\_epochs()](function.fann-get-cascade-output-stagnation-epochs.md), o treinamento das conexões de saída será
interrompido porque o treinamento estagnou.

Se a fração de alteração da saída em cascata for baixa, as conexões de saída serão mais treinadas e se a fração for alta,
elas serão menos treinadas.

A fração de alteração de saída em cascata padrão é 0,01, o que equivale a uma alteração de 1% no MSE.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

A fração de mudança de saída em cascata, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_cascade\_output\_change\_fraction()](function.fann-set-cascade-output-change-fraction.md) - Define a fração de modificação da saída em cascata
- [fann\_get\_MSE()](function.fann-get-mse.md) - Lê o erro quadrático médio da rede
- [fann\_get\_cascade\_output\_stagnation\_epochs()](function.fann-get-cascade-output-stagnation-epochs.md) - Retorna o número de épocas de estagnação da saída em cascata

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
