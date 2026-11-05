# Define a fração de modificação de candidatos em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-candidate-change-fraction.php

---

# fann\_set\_cascade\_candidate\_change\_fraction

(PECL fann >= 1.0.0)

fann\_set\_cascade\_candidate\_change\_fraction — Define a fração de modificação de candidatos em cascata

### Descrição

function **fann\_set\_cascade\_candidate\_change\_fraction**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$cascade_candidate_change_fraction`): [bool](language.types.boolean.md)

Define a fração de modificação de candidatos em cascata.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_candidate_change_fraction`
:   A fração de modificação de candidatos em cascata.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_cascade\_candidate\_change\_fraction()](function.fann-get-cascade-candidate-change-fraction.md) - Retorna a fração de alteração de candidatos em cascata

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
