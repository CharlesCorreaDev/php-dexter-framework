# Retorna a inclinação da função de ativação para o neurônio e a camada informados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-activation-steepness.php

---

# fann\_get\_activation\_steepness

(PECL fann >= 1.0.0)

fann\_get\_activation\_steepness — Retorna a inclinação da função de ativação para o neurônio e a camada informados

### Descrição

function **fann\_get\_activation\_steepness**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$layer`, [int](language.types.integer.md) `$neuron`): [float](language.types.float.md)

Obtém a inclinação da função de ativação para o neurônio de número `neuron` na camada de número
`layer`, contando a camada de entrada como camada 0.

Não é possível obter inclinação da função de ativação para neurônios na camada de entrada.

A inclinação de uma função de ativação indica o quão rápido a função vai
do mínimo até o máximo. Um valor alto irá gerar um treinamento mais agressivo.

Ao treinar redes neurais onde os valores de saída devem estar nos extremos
(normalmente 0 e 1, dependendo da função de ativação), um função de ativação bem inclinada pode ser usada (ex.: 1.0).

A inclinação padrão para função de ativação é 0.5.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`layer`
:   Número da camada.

`neuron`
:   Número do neurônio.

### Valor Retornado

A inclinação da função de ativação para o neurônio ou -1 se o neurônio não estiver definido na rede neural, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_activation\_function()](function.fann-set-activation-function.md) - Define a função de ativação para o neurônio e a camada informados
- [fann\_set\_activation\_steepness\_layer()](function.fann-set-activation-steepness-layer.md) - Define a inclinação de ativação para todos os neurônios da camada especificada
- [fann\_set\_activation\_steepness\_hidden()](function.fann-set-activation-steepness-hidden.md) - Define a inclinação de ativação para todos os neurônios em todas as camadas ocultas
- [fann\_set\_activation\_steepness\_output()](function.fann-set-activation-steepness-output.md) - Define a inclinação de ativação na camada de saída
- [fann\_set\_activation\_steepness()](function.fann-set-activation-steepness.md) - Define a inclinação de ativação para o neurônio e camada informados

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
