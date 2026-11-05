# Construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.construct.php

---

# SolrDocument::\_\_construct

(PECL solr >= 0.9.2)

SolrDocument::\_\_construct — Construtor

### Descrição

public function **SolrDocument::\_\_construct**()

Construtor para SolrDocument.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

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
