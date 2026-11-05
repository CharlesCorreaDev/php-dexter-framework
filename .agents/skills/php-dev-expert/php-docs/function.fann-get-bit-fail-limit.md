# Retorna o limite de falha de bit usado durante o treinamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fann-get-bit-fail-limit.php

---

# fann\_get\_bit\_fail\_limit

(PECL fann >= 1.0.0)

fann\_get\_bit\_fail\_limit — Retorna o limite de falha de bit usado durante o treinamento

### Descrição

function **fann\_get\_bit\_fail\_limit**([resource](language.types.resource.md) `$ann`): [float](language.types.float.md)

Retorna o limite de falha de bit usado durante o treinamento.

O limite de falha de bit é usado durante o treinamento onde a [função de parada](fann.constants.md#constants.fann-stopfunc)
é definida para **`FANN_STOPFUNC_BIT`**.

O limite é a diferença máxima aceita entre a saída desejada e a saída real durante o treinamento.
Cada saída que diverge mais que esse limite é contada como um bit de erro. Esta diferença é dividida por dois
quando se trata de funções de ativação simétricas, de modo que funções de ativação simétricas e não simétricas
podem utilizar o mesmo limite.

O limite padrão de falha de bit é 0.35.

### Parâmetros

`ann`
:   [resource](language.types.resource.md) da rede neural.

### Valor Retornado

O limite de falha de bit, ou **`false`** em caso de erro.

### Veja também

- [fann\_set\_bit\_fail\_limit()](function.fann-set-bit-fail-limit.md) - Define o limite de falhas de bit usado durante o treinamento

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
