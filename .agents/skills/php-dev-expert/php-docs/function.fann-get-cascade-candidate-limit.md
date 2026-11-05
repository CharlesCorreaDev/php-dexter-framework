# Retorna o limite de candidato

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-cascade-candidate-limit.php

---

# fann\_get\_cascade\_candidate\_limit

(PECL fann >= 1.0.0)

fann\_get\_cascade\_candidate\_limit — Retorna o limite de candidato

### Descrição

function **fann\_get\_cascade\_candidate\_limit**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

O limite de candidato é um limite para quanto o neurônio candidato será treinado. É um limite
na proporção entre o MSE e a pontuação do candidato.

Defina para um valor baixo para envitar sobreajuste e para um valor alto se o sobreajuste não for um problema.

O limite padrão de candidato é 1000.0.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O limite de candidato, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_cascade\_candidate\_limit()](function.fann-set-cascade-candidate-limit.md) - Define o limite de candidatos

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
