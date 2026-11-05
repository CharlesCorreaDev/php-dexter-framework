# Remove um dos parâmetros facet.date

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removefacetfield.php

---

# SolrQuery::removeFacetField

(PECL solr >= 0.9.2)

SolrQuery::removeFacetField — Remove um dos parâmetros facet.date

### Descrição

public function **SolrQuery::removeFacetField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Remove um dos parâmetros facet.date.

### Parâmetros

`field`
:   O nome do campo

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
