# Determina a ordem das restrições do campo de faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetsort.php

---

# SolrQuery::setFacetSort

(PECL solr >= 0.9.2)

SolrQuery::setFacetSort — Determina a ordem das restrições do campo de faceta

### Descrição

public function **SolrQuery::setFacetSort**([int](language.types.integer.md) `$facetSort`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Determina a ordem das restrições do campo de faceta.

### Parâmetros

`facetSort`
:   Use SolrQuery::FACET\_SORT\_INDEX para classificar por ordem de índice ou SolrQuery::FACET\_SORT\_COUNT para classificar por contagem.

`field_override`
:   O nome do campo.

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
