# Define o número de épocas de estagnação de saída em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-output-stagnation-epochs.php

---

# fann\_set\_cascade\_output\_stagnation\_epochs

(PECL fann >= 1.0.0)

fann\_set\_cascade\_output\_stagnation\_epochs — Define o número de épocas de estagnação de saída em cascata

### Descrição

function **fann\_set\_cascade\_output\_stagnation\_epochs**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$cascade_output_stagnation_epochs`): [bool](language.types.boolean.md)

Define o número de épocas de estagnação de saída em cascata.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_output_stagnation_epochs`
:   O número de épocas de estagnação de saída em cascata.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_cascade\_output\_stagnation\_epochs()](function.fann-get-cascade-output-stagnation-epochs.md) - Retorna o número de épocas de estagnação da saída em cascata

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
