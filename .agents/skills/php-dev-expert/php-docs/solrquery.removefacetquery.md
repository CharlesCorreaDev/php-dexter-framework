# Remove um dos parâmetros facet.query

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removefacetquery.php

---

# SolrQuery::removeFacetQuery

(PECL solr >= 0.9.2)

SolrQuery::removeFacetQuery — Remove um dos parâmetros facet.query

### Descrição

public function **SolrQuery::removeFacetQuery**([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

Remove um dos parâmetros facet.query.

### Parâmetros

`value`
:   O valor.

### Valor Retornado

Retorna o objeto SolrQuery atual, se o valor de retorno for usado.

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
