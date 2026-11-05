# Mapeia para facet.date.hardend

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetdatehardend.php

---

# SolrQuery::setFacetDateHardEnd

(PECL solr >= 0.9.2)

SolrQuery::setFacetDateHardEnd — Mapeia para facet.date.hardend

### Descrição

public function **SolrQuery::setFacetDateHardEnd**([bool](language.types.boolean.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Mapeia para facet.date.hardend.

### Parâmetros

`value`
:   Consulte facet.date.hardend.

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
