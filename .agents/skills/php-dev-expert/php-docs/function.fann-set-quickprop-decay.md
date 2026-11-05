# Define o fator de decaimento do Quickprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-quickprop-decay.php

---

# fann\_set\_quickprop\_decay

(PECL fann >= 1.0.0)

fann\_set\_quickprop\_decay — Define o fator de decaimento do Quickprop

### Descrição

function **fann\_set\_quickprop\_decay**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$quickprop_decay`): [bool](language.types.boolean.md)

Define o fator de decaimento do Quickprop.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`quickprop_decay`
:   O fator de decaimento do Quickprop.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_quickprop\_decay()](function.fann-get-quickprop-decay.md) - Retorna o decaimento que é um fator que os pesos devem reduzir em cada ideração durante o treinamento Quickprop

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
