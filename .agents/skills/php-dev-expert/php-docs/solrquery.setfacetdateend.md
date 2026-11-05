# Mapeia para facet.date.end

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetdateend.php

---

# SolrQuery::setFacetDateEnd

(PECL solr >= 0.9.2)

SolrQuery::setFacetDateEnd — Mapeia para facet.date.end

### Descrição

public function **SolrQuery::setFacetDateEnd**([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Mapeia para facet.date.end.

### Parâmetros

`value`
:   Consulte facet.date.end.

`field_override`
:   Nome do campo.

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
