# Mapeia para facet.date

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addfacetdatefield.php

---

# SolrQuery::addFacetDateField

(PECL solr >= 0.9.2)

SolrQuery::addFacetDateField — Mapeia para facet.date

### Descrição

public function **SolrQuery::addFacetDateField**([string](language.types.string.md) `$dateField`): [SolrQuery](class.solrquery.md)

Este método permite especificar um campo que deve ser tratado como uma faceta.

Ele pode ser usado várias vezes com nomes de campos diferentes para indicar vários campos de facetas

### Parâmetros

`dateField`
:   O nome do campo de data.

### Valor Retornado

Retorna um objeto SolrQuery.

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
