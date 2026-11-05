# Define período instável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-set-unstable-period.php

---

# trader\_set\_unstable\_period

(PECL trader >= 0.2.2)

trader\_set\_unstable\_period — Define período instável

### Descrição

function **trader\_set\_unstable\_period**([int](language.types.integer.md) `$functionId`, [int](language.types.integer.md) `$timePeriod`): [void](language.types.void.md)

Influencia o fator de período instável para funções sensíveis a ele. Mais informações sobre períodos instáveis ​​podem ser encontradas na página de documentação da API [» TA-Lib](https://ta-lib.org/api/?h=unstable#Unstable+Period).

### Parâmetros

`functionId`
:   O ID da função para o qual o fator deve ser definido. A série constante [TRADER\_FUNC\_UNST\_\*](trader.constants.md) pode ser usada para afetar a função correspondente.

`timePeriod`
:   Valor do período instável.

### Valor Retornado

Nenhum valor é retornado.

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
