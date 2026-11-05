# Retorna o número de candidatos utilizados durante o treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-num-candidates.php

---

# fann\_get\_cascade\_num\_candidates

(PECL fann >= 1.0.0)

fann\_get\_cascade\_num\_candidates — Retorna o número de candidatos utilizados durante o treinamento

### Descrição

function **fann\_get\_cascade\_num\_candidates**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

O número de candidatos utilizados durante o treinamento (calculado multiplicando
[fann\_get\_cascade\_activation\_functions\_count()](function.fann-get-cascade-activation-functions-count.md),
[fann\_get\_cascade\_activation\_steepnesses\_count()](function.fann-get-cascade-activation-steepnesses-count.md) e
[fann\_get\_cascade\_num\_candidate\_groups()](function.fann-get-cascade-num-candidate-groups.md)).

Os candidatos reais são definidos pelos arrays [fann\_get\_cascade\_activation\_functions()](function.fann-get-cascade-activation-functions.md) e
[fann\_get\_cascade\_activation\_steepnesses()](function.fann-get-cascade-activation-steepnesses.md). Estes arrays definem as funções de ativação e
as inclinações de ativação usadas para os neurônios candidatos. Se houver duas funções de ativação no array de funções de ativação e
três inclinações no array de inclinações, então haverá 2x3=6 candidatos diferentes que serão treinados. Estes 6 candidatos
diferentes podem ser copiados em vários grupos de candidatos, onde a única diferença entre estes grupos são os pesos iniciais.
Se o número de grupos for definido como 2, o número de neurônios candidatos será 2x3x2=12.
O número de grupos candidatos é definido por [fann\_set\_cascade\_num\_candidate\_groups()](function.fann-set-cascade-num-candidate-groups.md).

O número padrão de candidatos é 6x4x2 = 48.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número de candidatos utilizados durante o treinamento, ou **`false`** em caso de erro.

### Veja também

- [fann\_get\_cascade\_activation\_functions()](function.fann-get-cascade-activation-functions.md) - Retorna as funções de ativação em cascata
- [fann\_get\_cascade\_activation\_functions\_count()](function.fann-get-cascade-activation-functions-count.md) - Retorna o número de funções de ativação em cascata
- [fann\_get\_cascade\_activation\_steepnesses()](function.fann-get-cascade-activation-steepnesses.md) - Retorna as inclinações de ativação em cascata
- [fann\_get\_cascade\_activation\_steepnesses\_count()](function.fann-get-cascade-activation-steepnesses-count.md) - O número de inclinações de ativação
- [fann\_get\_cascade\_num\_candidate\_groups()](function.fann-get-cascade-num-candidate-groups.md) - Retorna o número de grupos candidatos

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
