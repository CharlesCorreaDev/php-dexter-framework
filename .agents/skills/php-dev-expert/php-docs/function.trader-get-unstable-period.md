# Obtém o período instável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-get-unstable-period.php

---

# trader\_get\_unstable\_period

(PECL trader >= 0.2.2)

trader\_get\_unstable\_period — Obtém o período instável

### Descrição

function **trader\_get\_unstable\_period**([int](language.types.integer.md) `$functionId`): [int](language.types.integer.md)

Obtém o fator de período instável para uma função em particular.

### Parâmetros

`functionId`
:   ID da função do fator a ser lido. A série de constantes [TRADER\_FUNC\_UNST\_\*](trader.constants.md) deve ser usada.

### Valor Retornado

Retorna o fator de período instável para a função correspondente.

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
