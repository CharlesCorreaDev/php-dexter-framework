# Define o array de inclinação de ativação de candidatos em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-activation-steepnesses.php

---

# fann\_set\_cascade\_activation\_steepnesses

(PECL fann >= 1.0.0)

fann\_set\_cascade\_activation\_steepnesses — Define o array de inclinação de ativação de candidatos em cascata

### Descrição

function **fann\_set\_cascade\_activation\_steepnesses**([resource](language.types.resource.md) `$ann`, [array](language.types.array.md) `$cascade_activation_steepnesses_count`): [bool](language.types.boolean.md)

Define o array de inclinação de ativação de candidatos em cascata.

Consulte [fann\_get\_cascade\_num\_candidates()](function.fann-get-cascade-num-candidates.md) para uma descrição de quais neurônios candidatos serão gerados por este array.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_activation_steepnesses_count`
:   O array de inclinação de ativação de candidatos em cascata.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_cascade\_activation\_steepnesses()](function.fann-get-cascade-activation-steepnesses.md) - Retorna as inclinações de ativação em cascata
- [fann\_get\_cascade\_activation\_steepnesses\_count()](function.fann-get-cascade-activation-steepnesses-count.md) - O número de inclinações de ativação

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
