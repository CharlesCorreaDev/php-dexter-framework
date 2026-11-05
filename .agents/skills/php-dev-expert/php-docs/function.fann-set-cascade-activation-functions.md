# Define o array de funções de ativação de candidatos em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-activation-functions.php

---

# fann\_set\_cascade\_activation\_functions

(PECL fann >= 1.0.0)

fann\_set\_cascade\_activation\_functions — Define o array de funções de ativação de candidatos em cascata

### Descrição

function **fann\_set\_cascade\_activation\_functions**([resource](language.types.resource.md) `$ann`, [array](language.types.array.md) `$cascade_activation_functions`): [bool](language.types.boolean.md)

Define o array de funções de ativação de candidatos em cascata.

Consulte [fann\_get\_cascade\_num\_candidates()](function.fann-get-cascade-num-candidates.md) para uma descrição de quais neurônios candidatos serão gerados por este array.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_activation_functions`
:   O array de funções de ativação de candidatos em cascata.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_cascade\_activation\_functions\_count()](function.fann-get-cascade-activation-functions-count.md) - Retorna o número de funções de ativação em cascata
- **fann\_set\_cascade\_activation\_functions()**

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
