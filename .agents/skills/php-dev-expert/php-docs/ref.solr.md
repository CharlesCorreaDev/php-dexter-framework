# Funções de Solr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.solr.php

---

# Funções de Solr

## Índice

- [solr\_get\_version](function.solr-get-version.md) — Retorna a versão atual da extensão Apache Solr

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
