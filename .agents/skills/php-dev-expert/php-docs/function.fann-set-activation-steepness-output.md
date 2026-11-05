# Define a inclinação de ativação na camada de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-activation-steepness-output.php

---

# fann\_set\_activation\_steepness\_output

(PECL fann >= 1.0.0)

fann\_set\_activation\_steepness\_output — Define a inclinação de ativação na camada de saída

### Descrição

function **fann\_set\_activation\_steepness\_output**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$activation_steepness`): [bool](language.types.boolean.md)

Define a inclinação de ativação na camada de saída.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`activation_steepness`
:   A inclinação de ativação.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_set\_activation\_steepness()](function.fann-set-activation-steepness.md) - Define a inclinação de ativação para o neurônio e camada informados
- [fann\_set\_activation\_steepness\_layer()](function.fann-set-activation-steepness-layer.md) - Define a inclinação de ativação para todos os neurônios da camada especificada
- [fann\_set\_activation\_steepness\_hidden()](function.fann-set-activation-steepness-hidden.md) - Define a inclinação de ativação para todos os neurônios em todas as camadas ocultas
- [fann\_get\_activation\_steepness()](function.fann-get-activation-steepness.md) - Retorna a inclinação da função de ativação para o neurônio e a camada informados
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
