# Filtros de Fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stream.filters.php

---

# Filtros de Fluxo

Um `filtro` é uma peça final de código que pode realizar
operações em dados enquanto eles são lidos de ou escritos em um fluxo.
Qualquer quantidade de filtros pode ser empilhada em um fluxo. Filtros
personalizados podem ser definidos em um script PHP usando
[stream\_filter\_register()](function.stream-filter-register.md) ou em uma extensão.
Para acessar a lista de filtros atualmente
registrados, use a função [stream\_get\_filters()](function.stream-get-filters.md).

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
