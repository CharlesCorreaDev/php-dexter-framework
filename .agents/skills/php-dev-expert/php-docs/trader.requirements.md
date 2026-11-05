# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/trader.requirements.php

---

## Dependências

A extensão do trader é baseada na [» TA-Lib](https://ta-lib.org/). A TA-Lib é totalmente integrada à extensão, portanto, não são necessárias bibliotecas externas.

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
