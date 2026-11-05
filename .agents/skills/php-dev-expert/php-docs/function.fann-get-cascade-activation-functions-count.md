# Retorna o número de funções de ativação em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-activation-functions-count.php

---

# fann\_get\_cascade\_activation\_functions\_count

(PECL fann >= 1.0.0)

fann\_get\_cascade\_activation\_functions\_count — Retorna o número de funções de ativação em cascata

### Descrição

function **fann\_get\_cascade\_activation\_functions\_count**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

O número de funções de ativação no array [fann\_get\_cascade\_activation\_functions()](function.fann-get-cascade-activation-functions.md).

O número padrão de funções de ativação é 6.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número de funções de ativação em cascata, ou **`false`** em caso de erro.

### Veja também

- [fann\_get\_cascade\_activation\_functions()](function.fann-get-cascade-activation-functions.md) - Retorna as funções de ativação em cascata
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
