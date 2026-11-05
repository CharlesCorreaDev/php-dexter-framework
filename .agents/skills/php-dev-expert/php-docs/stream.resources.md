# Classes de Fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stream.resources.php

---

## Classes de Fluxo

Empacotadores criados pelo usuário podem ser registrados via [stream\_wrapper\_register()](function.stream-wrapper-register.md),
usando a definição de classe mostrada na página correspondente do manual.

A classe [php\_user\_filter](class.php-user-filter.md) é predefinida e é uma classe base
abstrata para uso com filtros definidos pelo usuário. Consulte a página do manual de
[stream\_filter\_register()](function.stream-filter-register.md) para detalhes de implementação
de filtros definidos pelo usuário.

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
