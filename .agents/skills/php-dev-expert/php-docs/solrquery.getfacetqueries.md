# Retorna todas as consultas de faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetqueries.php

---

# SolrQuery::getFacetQueries

(PECL solr >= 0.9.2)

SolrQuery::getFacetQueries — Retorna todas as consultas de faceta

### Descrição

public function **SolrQuery::getFacetQueries**(): [array](language.types.array.md)

Retorna todas as consultas de faceta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array em caso de sucesso e **`null`** se não estiver definido.

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
