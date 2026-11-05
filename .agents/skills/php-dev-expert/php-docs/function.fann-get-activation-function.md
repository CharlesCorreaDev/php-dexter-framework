# Retorna a função de ativação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-activation-function.php

---

# fann\_get\_activation\_function

(PECL fann >= 1.0.0)

fann\_get\_activation\_function — Retorna a função de ativação

### Descrição

function **fann\_get\_activation\_function**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$layer`, [int](language.types.integer.md) `$neuron`): [int](language.types.integer.md)

Obtém a função de ativação para o neurônio de número `neuron` na camada de número
`layer`, contando a camada de entrada como camada 0.

Não é possível obter as funções de ativação para os neurônio na camada de entrada.

O valor de retorno é uma das constantes de [funções de ativação](fann.constants.md#constants.fann-activation-funcs).

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`layer`
:   Número da camada.

`neuron`
:   Número do neurônio.

### Valor Retornado

Constante das [funções de ativação](fann.constants.md#constants.fann-activation-funcs) ou -1
se o neurônio não estiver definido na rede neural, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_activation\_function\_layer()](function.fann-set-activation-function-layer.md) - Define a função de ativação para todos os neurônios na camada especificada
- [fann\_set\_activation\_function\_hidden()](function.fann-set-activation-function-hidden.md) - Define a função de ativação para todas as camadas ocultas
- [fann\_set\_activation\_function\_output()](function.fann-set-activation-function-output.md) - Define a função de ativação para a camada de saída
- [fann\_set\_activation\_steepness()](function.fann-set-activation-steepness.md) - Define a inclinação de ativação para o neurônio e camada informados
- [fann\_set\_activation\_function()](function.fann-set-activation-function.md) - Define a função de ativação para o neurônio e a camada informados

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
