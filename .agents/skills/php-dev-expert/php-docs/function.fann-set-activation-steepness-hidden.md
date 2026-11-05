# Define a inclinação de ativação para todos os neurônios em todas as camadas ocultas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-activation-steepness-hidden.php

---

# fann\_set\_activation\_steepness\_hidden

(PECL fann >= 1.0.0)

fann\_set\_activation\_steepness\_hidden — Define a inclinação de ativação para todos os neurônios em todas as camadas ocultas

### Descrição

function **fann\_set\_activation\_steepness\_hidden**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$activation_steepness`): [bool](language.types.boolean.md)

Define a inclinação de ativação para todos os neurônios em todas as camadas ocultas.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`activation_steepness`
:   A inclinação da ativação.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_set\_activation\_steepness()](function.fann-set-activation-steepness.md) - Define a inclinação de ativação para o neurônio e camada informados
- [fann\_set\_activation\_steepness\_layer()](function.fann-set-activation-steepness-layer.md) - Define a inclinação de ativação para todos os neurônios da camada especificada
- [fann\_set\_activation\_steepness\_output()](function.fann-set-activation-steepness-output.md) - Define a inclinação de ativação na camada de saída
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
