# O número de inclinações de ativação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-activation-steepnesses-count.php

---

# fann\_get\_cascade\_activation\_steepnesses\_count

(PECL fann >= 1.0.0)

fann\_get\_cascade\_activation\_steepnesses\_count — O número de inclinações de ativação

### Descrição

function **fann\_get\_cascade\_activation\_steepnesses\_count**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

O número de inclinações de ativação no array [fann\_get\_cascade\_activation\_functions()](function.fann-get-cascade-activation-functions.md).

O número padrão de inclinações de ativação é 4.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número de inclinações de ativação, ou **`false`** em caso de erro.

### Veja também

- [fann\_get\_cascade\_activation\_steepnesses()](function.fann-get-cascade-activation-steepnesses.md) - Retorna as inclinações de ativação em cascata
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
