# Define o número de grupos candidatos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-num-candidate-groups.php

---

# fann\_set\_cascade\_num\_candidate\_groups

(PECL fann >= 1.0.0)

fann\_set\_cascade\_num\_candidate\_groups — Define o número de grupos candidatos

### Descrição

function **fann\_set\_cascade\_num\_candidate\_groups**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$cascade_num_candidate_groups`): [bool](language.types.boolean.md)

Define o número de grupos candidatos.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_num_candidate_groups`
:   O número de grupos candidatos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

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
