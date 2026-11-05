# Retorna as consultas de filtro de expansão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getexpandfilterqueries.php

---

# SolrQuery::getExpandFilterQueries

(PECL solr >= 2.2.0)

SolrQuery::getExpandFilterQueries — Retorna as consultas de filtro de expansão

### Descrição

public function **SolrQuery::getExpandFilterQueries**(): [array](language.types.array.md)

Retorna as consultas de filtro de expansão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna as consultas de filtro de expansão.

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
