# Define a função de ativação para o neurônio e a camada informados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-activation-function.php

---

# fann\_set\_activation\_function

(PECL fann >= 1.0.0)

fann\_set\_activation\_function — Define a função de ativação para o neurônio e a camada informados

### Descrição

function **fann\_set\_activation\_function**(  
    [resource](language.types.resource.md) `$ann`,  
    [int](language.types.integer.md) `$activation_function`,  
    [int](language.types.integer.md) `$layer`,  
    [int](language.types.integer.md) `$neuron`  
): [bool](language.types.boolean.md)

Define a função de ativação para o neurônio número `neuron` na camada número
`layer`, contando a camada de entrada como 0.

Não é possível definir funções de ativação para os neurônios na camada de entrada.

Ao escolher uma função de ativação é importante observar que elas têm faixas diferentes.
**`FANN_SIGMOID`**, por exemplo, está na faixa 0 - 1 enquanto que **`FANN_SIGMOID_SYMMETRIC`** está
na faixa -1 - 1 e **`FANN_LINEAR`** não tem limites.

O valor de activation\_function fornecido precisa ser
uma das constantes de [função de ativação](fann.constants.md#constants.fann-activation-funcs).

O valor de retorno é uma das constantes de [função de ativação](fann.constants.md#constants.fann-train).

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`activation_function`
:   A constante de [função de ativação](fann.constants.md#constants.fann-activation-funcs).

`layer`
:   O número da camada.

`neuron`
:   O número do neurônio.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_set\_activation\_function\_layer()](function.fann-set-activation-function-layer.md) - Define a função de ativação para todos os neurônios na camada especificada
- [fann\_set\_activation\_function\_hidden()](function.fann-set-activation-function-hidden.md) - Define a função de ativação para todas as camadas ocultas
- [fann\_set\_activation\_function\_output()](function.fann-set-activation-function-output.md) - Define a função de ativação para a camada de saída
- [fann\_set\_activation\_steepness()](function.fann-set-activation-steepness.md) - Define a inclinação de ativação para o neurônio e camada informados
- [fann\_get\_activation\_function()](function.fann-get-activation-function.md) - Retorna a função de ativação

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
