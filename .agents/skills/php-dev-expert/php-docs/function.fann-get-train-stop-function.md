# Retorna a função de parada usada durante o treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-train-stop-function.php

---

# fann\_get\_train\_stop\_function

(PECL fann >= 1.0.0)

fann\_get\_train\_stop\_function — Retorna a função de parada usada durante o treinamento

### Descrição

function **fann\_get\_train\_stop\_function**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

Retorna a função de parada usada durante o treinamento.

As funções de parada estão descritas na seção das constantes de [funções de parada](fann.constants.md#constants.fann-stopfunc).

Afunção de parada padrão é **`FANN_STOPFUNC_MSE`**.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

A constante de [função de parada](fann.constants.md#constants.fann-stopfunc), ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_train\_stop\_function()](function.fann-set-train-stop-function.md) - Define a função de parada usada durante o treinamento

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
