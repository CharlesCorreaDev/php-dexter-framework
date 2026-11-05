# Define a fração de modificação da saída em cascata

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-output-change-fraction.php

---

# fann\_set\_cascade\_output\_change\_fraction

(PECL fann >= 1.0.0)

fann\_set\_cascade\_output\_change\_fraction — Define a fração de modificação da saída em cascata

### Descrição

function **fann\_set\_cascade\_output\_change\_fraction**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$cascade_output_change_fraction`): [bool](language.types.boolean.md)

Define a fração de modificação da saída em cascata.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_output_change_fraction`
:   A fração de modificação da saída em cascata.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_cascade\_output\_change\_fraction()](function.fann-get-cascade-output-change-fraction.md) - Retorna a fração de alteração da saída em cascata

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
