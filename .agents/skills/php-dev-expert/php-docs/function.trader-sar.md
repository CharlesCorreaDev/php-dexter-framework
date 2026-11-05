# SAR parabólico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-sar.php

---

# trader\_sar

(PECL trader >= 0.2.0)

trader\_sar — SAR parabólico

### Descrição

function **trader\_sar**(  
    [array](language.types.array.md) `$high`,  
    [array](language.types.array.md) `$low`,  
    [float](language.types.float.md) `$acceleration` = ?,  
    [float](language.types.float.md) `$maximum` = ?  
): [array](language.types.array.md)

### Parâmetros

`high`
:   Preço alto, array de valores reais.

`low`
:   Preço baixo, array de valores reais.

`acceleration`
:   Fator de Aceleração utilizado até o valor Máximo. Intervalo válido de 0 a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`maximum`
:   Fator de Aceleração: Valor máximo. Intervalo válido de 0 a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

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
