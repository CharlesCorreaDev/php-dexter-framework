# Retorna as funções de ativação em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-activation-functions.php

---

# fann\_get\_cascade\_activation\_functions

(PECL fann >= 1.0.0)

fann\_get\_cascade\_activation\_functions — Retorna as funções de ativação em cascata

### Descrição

function **fann\_get\_cascade\_activation\_functions**([resource](language.types.resource.md) `$ann`): [array](language.types.array.md)

O array de funções de ativação em cascata é um array das diferentes funções de ativação usada pelos neurônios candidatos.

Consulte [fann\_get\_cascade\_num\_candidates()](function.fann-get-cascade-num-candidates.md) para uma descrição de que neurônios candidatos serão gerados por este array.

As funções de ativação padrão são **`FANN_SIGMOID`**, **`FANN_SIGMOID_SYMMETRIC`**,
**`FANN_GAUSSIAN`**, **`FANN_GAUSSIAN_SYMMETRIC`**, **`FANN_ELLIOT`** e
**`FANN_ELLIOT_SYMMETRIC`**.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

As funções de ativação em cascata, ou **`false`** em caso de erro.

### Veja também

- [fann\_get\_cascade\_activation\_functions\_count()](function.fann-get-cascade-activation-functions-count.md) - Retorna o número de funções de ativação em cascata
- [fann\_set\_cascade\_activation\_functions()](function.fann-set-cascade-activation-functions.md) - Define o array de funções de ativação de candidatos em cascata

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
