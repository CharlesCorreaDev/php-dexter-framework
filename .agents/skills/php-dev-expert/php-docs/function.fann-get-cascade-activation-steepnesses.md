# Retorna as inclinações de ativação em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-activation-steepnesses.php

---

# fann\_get\_cascade\_activation\_steepnesses

(PECL fann >= 1.0.0)

fann\_get\_cascade\_activation\_steepnesses — Retorna as inclinações de ativação em cascata

### Descrição

function **fann\_get\_cascade\_activation\_steepnesses**([resource](language.types.resource.md) `$ann`): [array](language.types.array.md)

O array de inclinações de ativação em cascata é um array das deferentes inclinações de funções de ativação usadas pelos neurônios candidatos.

Consulte [fann\_get\_cascade\_num\_candidates()](function.fann-get-cascade-num-candidates.md) para uma descrição de que neurônios candidatos serão gerados por este array.

As inclinações padrão de ativação são {0.25, 0.50, 0.75, 1.00}.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

As inclinações de ativação em cascata, ou **`false`** em caso de erro.

### Veja também

- [fann\_get\_cascade\_activation\_steepnesses\_count()](function.fann-get-cascade-activation-steepnesses-count.md) - O número de inclinações de ativação
- [fann\_set\_cascade\_activation\_steepnesses()](function.fann-set-cascade-activation-steepnesses.md) - Define o array de inclinação de ativação de candidatos em cascata

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
