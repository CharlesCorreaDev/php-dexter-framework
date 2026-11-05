# Retorna o número de grupos candidatos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-num-candidate-groups.php

---

# fann\_get\_cascade\_num\_candidate\_groups

(PECL fann >= 1.0.0)

fann\_get\_cascade\_num\_candidate\_groups — Retorna o número de grupos candidatos

### Descrição

function **fann\_get\_cascade\_num\_candidate\_groups**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

O número de grupos candidatos é o número de grupos de candidatos idênticos que serão usados durante o treinamento.

Este número pode ser usado para se ter mais candidatos sem a necessidade de se definir novos parâmetros para os candidatos.

Consulte [fann\_get\_cascade\_num\_candidates()](function.fann-get-cascade-num-candidates.md) para uma descrição de
quais neurônios candidatos serão gerados por este parâmetro.

O número padrão de grupos candidatos é 2.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O número de grupos candidatos, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_cascade\_num\_candidate\_groups()](function.fann-set-cascade-num-candidate-groups.md) - Define o número de grupos candidatos

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
