# Lê o erro quadrático médio da rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-mse.php

---

# fann\_get\_MSE

(PECL fann >= 1.0.0)

fann\_get\_MSE — Lê o erro quadrático médio da rede

### Descrição

function **fann\_get\_MSE**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

Lê o erro quadrático médio da rede.

Este valor é calculado durante o treinamento ou durante o teste e por isso pode
às vezes ficar um pouco fora se os pesos tiverem sido alterados desde o último cálculo do valor.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O erro quadrático médio, ou **`false`** em caso de erro.

### Veja também

- [fann\_test\_data()](function.fann-test-data.md) - Testa um conjunto de dados de treinamento e calcula seu MSE

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
