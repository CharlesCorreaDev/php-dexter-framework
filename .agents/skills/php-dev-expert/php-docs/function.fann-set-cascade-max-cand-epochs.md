# Define o máximo de épocas de candidatos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-max-cand-epochs.php

---

# fann\_set\_cascade\_max\_cand\_epochs

(PECL fann >= 1.0.0)

fann\_set\_cascade\_max\_cand\_epochs — Define o máximo de épocas de candidatos

### Descrição

function **fann\_set\_cascade\_max\_cand\_epochs**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$cascade_max_cand_epochs`): [bool](language.types.boolean.md)

Define o máximo de épocas de candidatos.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_max_cand_epochs`
:   O máximo de épocas de candidatos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_cascade\_max\_cand\_epochs()](function.fann-get-cascade-max-cand-epochs.md) - Retorna o máximo de épocas de candidatos

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
