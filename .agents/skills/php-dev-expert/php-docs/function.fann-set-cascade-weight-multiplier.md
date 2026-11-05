# Define o multiplicador de peso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-cascade-weight-multiplier.php

---

# fann\_set\_cascade\_weight\_multiplier

(PECL fann >= 1.0.0)

fann\_set\_cascade\_weight\_multiplier — Define o multiplicador de peso

### Descrição

function **fann\_set\_cascade\_weight\_multiplier**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$cascade_weight_multiplier`): [bool](language.types.boolean.md)

Define o multiplicador de peso.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`cascade_weight_multiplier`
:   O multiplicador de peso.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_cascade\_weight\_multiplier()](function.fann-get-cascade-weight-multiplier.md) - Retorna o multiplicador de peso

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
