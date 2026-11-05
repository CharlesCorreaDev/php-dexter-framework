# Mapeia para facet.date.start

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetdatestart.php

---

# SolrQuery::setFacetDateStart

(PECL solr >= 0.9.2)

SolrQuery::setFacetDateStart — Mapeia para facet.date.start

### Descrição

public function **SolrQuery::setFacetDateStart**([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Mapeia para facet.date.start.

### Parâmetros

`value`
:   Consulte facet.date.start.

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
