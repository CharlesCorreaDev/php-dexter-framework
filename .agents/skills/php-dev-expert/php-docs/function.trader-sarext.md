# SAR Parabólico - Estendido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-sarext.php

---

# trader\_sarext

(PECL trader >= 0.2.0)

trader\_sarext — SAR Parabólico - Estendido

### Descrição

function **trader\_sarext**(  
    [array](language.types.array.md) `$high`,  
    [array](language.types.array.md) `$low`,  
    [float](language.types.float.md) `$startValue` = ?,  
    [float](language.types.float.md) `$offsetOnReverse` = ?,  
    [float](language.types.float.md) `$accelerationInitLong` = ?,  
    [float](language.types.float.md) `$accelerationLong` = ?,  
    [float](language.types.float.md) `$accelerationMaxLong` = ?,  
    [float](language.types.float.md) `$accelerationInitShort` = ?,  
    [float](language.types.float.md) `$accelerationShort` = ?,  
    [float](language.types.float.md) `$accelerationMaxShort` = ?  
): [array](language.types.array.md)

### Parâmetros

`high`
:   Preço alto, array de valores reais.

`low`
:   Preço baixo, array de valores reais.

`startValue`
:   Valor inicial e direção. 0 para Automático, > 0 para Longo, < 0 para Curto. Intervalo válido de [TRADER\_REAL\_MIN](trader.constants.md#constant.trader-real-min) a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`offsetOnReverse`
:   Deslocamento percentual adicionado/removido do stop inicial na reversão curta/longa. Intervalo válido de 0 a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`accelerationInitLong`
:   Valor inicial do Fator de Aceleração para a direção Longa. Intervalo válido de 0 a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`accelerationLong`
:   Fator de Aceleração para a direção Longa. Intervalo válido de 0 a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`accelerationMaxLong`
:   Valor máximo do Fator de Aceleração para a direção Longa. Intervalo válido de 0 a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`accelerationInitShort`
:   Valor inicial do Fator de Aceleração para a direção Curta. Intervalo válido de 0 a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`accelerationShort`
:   Fator de Aceleração para a direção Curta. Intervalo válido de 0 a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`accelerationMaxShort`
:   Valor máximo do Fator de Aceleração para a direção Curta. Intervalo válido de 0 a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

### Valor Retornado

Retorna um array com os dados calculados ou false em caso de falha.

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
