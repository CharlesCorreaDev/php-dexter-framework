# Destrutor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.destruct.php

---

# SolrDocument::\_\_destruct

(PECL solr >= 0.9.2)

SolrDocument::\_\_destruct — Destrutor

### Descrição

public function **SolrDocument::\_\_destruct**()

Destrutor para SolrDocument.

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
