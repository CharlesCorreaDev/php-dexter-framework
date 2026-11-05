# Retorna a função de erro usada durante o treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-train-error-function.php

---

# fann\_get\_train\_error\_function

(PECL fann >= 1.0.0)

fann\_get\_train\_error\_function — Retorna a função de erro usada durante o treinamento

### Descrição

function **fann\_get\_train\_error\_function**([resource](language.types.resource.md) `$ann`): [int](language.types.integer.md)

Retorna a função de erro usada durante o treinamento.

As funções de erro estão descritas na seção das constantes de [funções de erro](fann.constants.md#constants.fann-errorfunc).

A função de erro padrão é **`FANN_ERRORFUNC_TANH`**.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

A constante de [função de erro](fann.constants.md#constants.fann-errorfunc), ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_train\_error\_function()](function.fann-set-train-error-function.md) - Define a função de erro usada durante o treinamento

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
