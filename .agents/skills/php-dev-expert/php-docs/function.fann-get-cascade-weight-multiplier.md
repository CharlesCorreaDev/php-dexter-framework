# Retorna o multiplicador de peso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-weight-multiplier.php

---

# fann\_get\_cascade\_weight\_multiplier

(PECL fann >= 1.0.0)

fann\_get\_cascade\_weight\_multiplier — Retorna o multiplicador de peso

### Descrição

function **fann\_get\_cascade\_weight\_multiplier**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

O multiplicador de peso é um parâmetro usado para multiplicar os pesos do neurônio candidato antes de adicioná-lo
à rede neural. Este parâmetro geralmente está entre 0 e 1 e é usado para tornar o treinamento um pouco menos agressivo.

O multiplicador de peso padrão é 0.4.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O multiplicador de peso, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_cascade\_weight\_multiplier()](function.fann-set-cascade-weight-multiplier.md) - Define o multiplicador de peso

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
