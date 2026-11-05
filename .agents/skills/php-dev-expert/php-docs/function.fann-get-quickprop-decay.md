# Retorna o decaimento que é um fator que os pesos devem reduzir em cada ideração durante o treinamento Quickprop

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-quickprop-decay.php

---

# fann\_get\_quickprop\_decay

(PECL fann >= 1.0.0)

fann\_get\_quickprop\_decay — Retorna o decaimento que é um fator que os pesos devem reduzir em cada ideração durante o treinamento Quickprop

### Descrição

function **fann\_get\_quickprop\_decay**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

O decaimento é um número negativo pequeno que é um fator que os pesos devem reduzir a cada iteração
durante o treinamento Quickprop. É usado para garantir que os pesos não fiquem muito altos durante o treinamento.

O decaimento padrão é -0.0001.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O decaimento, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_quickprop\_decay()](function.fann-set-quickprop-decay.md) - Define o fator de decaimento do Quickprop

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
