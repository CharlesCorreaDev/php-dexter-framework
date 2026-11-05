# Redefine o erro quadrático médio da rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-reset-mse.php

---

# fann\_reset\_MSE

(PECL fann >= 1.0.0)

fann\_reset\_MSE — Redefine o erro quadrático médio da rede

### Descrição

function **fann\_reset\_MSE**([string](language.types.string.md) `$ann`): [bool](language.types.boolean.md)

Redefine o erro quadrático médio da rede neural.

Esta função também redefine o número de erros de bit.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_get\_MSE()](function.fann-get-mse.md) - Lê o erro quadrático médio da rede
- [fann\_get\_bit\_fail()](function.fann-get-bit-fail.md) - O número de falhas de bit
- [fann\_get\_bit\_fail\_limit()](function.fann-get-bit-fail-limit.md) - Retorna o limite de falha de bit usado durante o treinamento

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
