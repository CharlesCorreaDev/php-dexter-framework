# Define a função de erro usada durante o treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-train-error-function.php

---

# fann\_set\_train\_error\_function

(PECL fann >= 1.0.0)

fann\_set\_train\_error\_function — Define a função de erro usada durante o treinamento

### Descrição

function **fann\_set\_train\_error\_function**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$error_function`): [bool](language.types.boolean.md)

Define a função de erro usada durante o treinamento.

Esses tipos de função de erro são descritos com mais detalhes na seção sobre as constantes de [funções de erro](fann.constants.md#constants.fann-errorfunc).

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`error_function`
:   A constante de [função de erro](fann.constants.md#constants.fann-errorfunc).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_train\_error\_function()](function.fann-get-train-error-function.md) - Retorna a função de erro usada durante o treinamento

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
