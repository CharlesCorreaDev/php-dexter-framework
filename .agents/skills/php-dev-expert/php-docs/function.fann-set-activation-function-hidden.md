# Define a função de ativação para todas as camadas ocultas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-activation-function-hidden.php

---

# fann\_set\_activation\_function\_hidden

(PECL fann >= 1.0.0)

fann\_set\_activation\_function\_hidden — Define a função de ativação para todas as camadas ocultas

### Descrição

function **fann\_set\_activation\_function\_hidden**([resource](language.types.resource.md) `$ann`, [int](language.types.integer.md) `$activation_function`): [bool](language.types.boolean.md)

Define a função de ativação para todas as camadas ocultas.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`activation_function`
:   A constante de [função de ativação](fann.constants.md#constants.fann-activation-funcs).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_set\_activation\_function()](function.fann-set-activation-function.md) - Define a função de ativação para o neurônio e a camada informados
- [fann\_set\_activation\_function\_layer()](function.fann-set-activation-function-layer.md) - Define a função de ativação para todos os neurônios na camada especificada
- [fann\_set\_activation\_function\_output()](function.fann-set-activation-function-output.md) - Define a função de ativação para a camada de saída
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
