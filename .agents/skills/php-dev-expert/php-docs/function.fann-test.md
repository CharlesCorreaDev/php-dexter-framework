# Testa com um conjunto de entradas, e um conjunto de saídas desejadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-test.php

---

# fann\_test

(PECL fann >= 1.0.0)

fann\_test — Testa com um conjunto de entradas, e um conjunto de saídas desejadas

### Descrição

function **fann\_test**([resource](language.types.resource.md) `$ann`, [array](language.types.array.md) `$input`, [array](language.types.array.md) `$desired_output`): [array](language.types.array.md)

Testa com um conjunto de entradas, e um conjunto de saídas desejadas. Esta operação atualiza o erro quadrático médio,
mas não altera em nada a rede.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`input`
:   Um array de entradas. Este array precisa ter um comprimento exatamente igual a [fann\_get\_num\_input()](function.fann-get-num-input.md).

`desired_output`
:   Um array de saídas desejadas. Este array precisa ter um comprimento exatamente igual a [fann\_get\_num\_output()](function.fann-get-num-output.md).

### Valor Retornado

Retorna as saídas de teste em caso de sucesso, ou **`false`** em caso de erro.

### Veja também

- [fann\_test\_data()](function.fann-test-data.md) - Testa um conjunto de dados de treinamento e calcula seu MSE
- [fann\_train()](function.fann-train.md) - Treina uma iteração com um conjunto de entradas e um conjunto de saídas desejadas
- [fann\_get\_num\_input()](function.fann-get-num-input.md) - Obtém o número de neurônios de entrada
- [fann\_get\_num\_output()](function.fann-get-num-output.md) - Obtém o número de neurônios de saída

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
