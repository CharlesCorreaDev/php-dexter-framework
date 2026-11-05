# Retorna o tipo de classificação de faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetsort.php

---

# SolrQuery::getFacetSort

(PECL solr >= 0.9.2)

SolrQuery::getFacetSort — Retorna o tipo de classificação de faceta

### Descrição

public function **SolrQuery::getFacetSort**([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

Retorna um número inteiro (SolrQuery::FACET\_SORT\_INDEX ou SolrQuery::FACET\_SORT\_COUNT).

### Parâmetros

`field_override`
:   O nome do campo

### Valor Retornado

Retorna um número inteiro (SolrQuery::FACET\_SORT\_INDEX ou SolrQuery::FACET\_SORT\_COUNT) em caso de sucesso ou **`null`** se não estiver definido.

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
