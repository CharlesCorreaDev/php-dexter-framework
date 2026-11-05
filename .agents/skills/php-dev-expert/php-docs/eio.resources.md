# Tipos de Recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eio.resources.php

---

## Tipos de Recurso

Existem dois tipos de recursos nesta extensão: solicitação e grupo de solicitações.

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
