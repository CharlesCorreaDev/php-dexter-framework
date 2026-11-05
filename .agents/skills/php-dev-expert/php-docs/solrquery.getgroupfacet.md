# Retorna o valor do parâmetro group.facet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupfacet.php

---

# SolrQuery::getGroupFacet

(PECL solr >= 2.2.0)

SolrQuery::getGroupFacet — Retorna o valor do parâmetro group.facet

### Descrição

public function **SolrQuery::getGroupFacet**(): [bool](language.types.boolean.md)

Retorna o valor do parâmetro group.facet.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::setGroupFacet()](solrquery.setgroupfacet.md) - Define o parâmetro group.facet

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
