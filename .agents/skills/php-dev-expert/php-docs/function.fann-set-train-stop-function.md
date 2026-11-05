# Define a função de parada usada durante o treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-train-stop-function.php

---

# fann\_set\_train\_stop\_function

(PECL fann >= 1.0.0)

fann\_set\_train\_stop\_function — Define a função de parada usada durante o treinamento

### Descrição

function **fann\_set\_train\_stop\_function**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$stop_function`): [bool](language.types.boolean.md)

Define a função de parada usada durante o treinamento.

Essas funções estão descritas na seção sobre as constantes de [funções de parada](fann.constants.md#constants.fann-stopfunc).

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`stop_function`
:   A constante de [função de parada](fann.constants.md#constants.fann-stopfunc).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_train\_stop\_function()](function.fann-get-train-stop-function.md) - Retorna a função de parada usada durante o treinamento

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
