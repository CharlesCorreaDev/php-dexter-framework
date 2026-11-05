# Treina uma iteração com um conjunto de entradas e um conjunto de saídas desejadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-train.php

---

# fann\_train

(PECL fann >= 1.0.0)

fann\_train — Treina uma iteração com um conjunto de entradas e um conjunto de saídas desejadas

### Descrição

function **fann\_train**([resource](language.types.resource.md) `$ann`, [array](language.types.array.md) `$input`, [array](language.types.array.md) `$desired_output`): [bool](language.types.boolean.md)

Treina uma iteração com um conjunto de entradas e um conjunto de saídas desejadas. Este treinamento é sempre incremental,
já que somente um padrão é apresentado.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`input`
:   Um array de entradas. Este array precisa ter um comprimento exatamente igual a [fann\_get\_num\_input()](function.fann-get-num-input.md).

`desired_output`
:   Um array de saídas desejadas. Este array precisa ter um comprimento exatamente igual a [fann\_get\_num\_output()](function.fann-get-num-output.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_train\_on\_data()](function.fann-train-on-data.md) - Treina em um conjunto de dados inteiro por um período de tempo
- [fann\_train\_epoch()](function.fann-train-epoch.md) - Treina uma época com um conjunto de dados de treinamento
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
