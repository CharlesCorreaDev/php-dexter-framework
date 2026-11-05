# Mapeia para facet.date.gap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetdategap.php

---

# SolrQuery::setFacetDateGap

(PECL solr >= 0.9.2)

SolrQuery::setFacetDateGap — Mapeia para facet.date.gap

### Descrição

public function **SolrQuery::setFacetDateGap**([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Mapeia para facet.date.gap.

### Parâmetros

`value`
:   Consulte facet.date.gap.

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
