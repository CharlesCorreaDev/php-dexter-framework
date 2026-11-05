# Remove um dos parâmetros facet.date.other

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removefacetdateother.php

---

# SolrQuery::removeFacetDateOther

(PECL solr >= 0.9.2)

SolrQuery::removeFacetDateOther — Remove um dos parâmetros facet.date.other

### Descrição

public function **SolrQuery::removeFacetDateOther**([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Remove um dos parâmetros facet.date.other.

### Parâmetros

`value`
:   O valor.

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
