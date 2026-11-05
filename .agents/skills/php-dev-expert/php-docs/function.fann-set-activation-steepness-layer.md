# Define a inclinação de ativação para todos os neurônios da camada especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-set-activation-steepness-layer.php

---

# fann\_set\_activation\_steepness\_layer

(PECL fann >= 1.0.0)

fann\_set\_activation\_steepness\_layer — Define a inclinação de ativação para todos os neurônios da camada especificada

### Descrição

function **fann\_set\_activation\_steepness\_layer**([resource](language.types.resource.md) `$ann`, [float](language.types.float.md) `$activation_steepness`, [int](language.types.integer.md) `$layer`): [bool](language.types.boolean.md)

Define a inclinação de ativação para todos os neurônios da camada especificada `layer`,
contando a camada de entrada como 0.

Não é possível definir inclinação de ativação para os neurônios na camada de entrada.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

`activation_steepness`
:   A inclinação de ativação.

`layer`
:   O número da camada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** caso contrário.

### Veja também

- [fann\_set\_activation\_steepness()](function.fann-set-activation-steepness.md) - Define a inclinação de ativação para o neurônio e camada informados
- [fann\_set\_activation\_steepness\_hidden()](function.fann-set-activation-steepness-hidden.md) - Define a inclinação de ativação para todos os neurônios em todas as camadas ocultas
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
