# Construtor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.construct.php

---

# SolrInputDocument::\_\_construct

(PECL solr >= 0.9.2)

SolrInputDocument::\_\_construct — Construtor

### Descrição

public function **SolrInputDocument::\_\_construct**()

Construtor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum.

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
