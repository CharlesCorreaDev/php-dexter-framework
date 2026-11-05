# Remove um dos campos de data de faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removefacetdatefield.php

---

# SolrQuery::removeFacetDateField

(PECL solr >= 0.9.2)

SolrQuery::removeFacetDateField — Remove um dos campos de data de faceta

### Descrição

public function **SolrQuery::removeFacetDateField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

O nome do campo

### Parâmetros

`field`
:   O nome do campo de data a ser removido

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
