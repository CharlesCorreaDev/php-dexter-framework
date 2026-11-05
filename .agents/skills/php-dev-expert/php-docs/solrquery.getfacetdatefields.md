# Retorna todos os campos facet.date

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetdatefields.php

---

# SolrQuery::getFacetDateFields

(PECL solr >= 0.9.2)

SolrQuery::getFacetDateFields — Retorna todos os campos facet.date

### Descrição

public function **SolrQuery::getFacetDateFields**(): [array](language.types.array.md)

Retorna todos os campos facet.date

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna todos os campos facet.date como um array ou **`null`** se nenhum estiver definido.

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
