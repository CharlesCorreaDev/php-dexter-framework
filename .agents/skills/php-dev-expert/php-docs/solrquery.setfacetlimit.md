# Mapeia para facet.limit

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setfacetlimit.php

---

# SolrQuery::setFacetLimit

(PECL solr >= 0.9.2)

SolrQuery::setFacetLimit — Mapeia para facet.limit

### Descrição

public function **SolrQuery::setFacetLimit**([int](language.types.integer.md) `$limit`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Mapeia para facet.limit. Define o número máximo de contagens de restrições que devem ser retornadas para os campos de faceta.

### Parâmetros

`limit`
:   O número máximo de contagens de restrição.

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
