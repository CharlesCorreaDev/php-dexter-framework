# Solicita um retorno de subresultados para valores dentro de uma determinada faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addstatsfacet.php

---

# SolrQuery::addStatsFacet

(PECL solr >= 0.9.2)

SolrQuery::addStatsFacet — Solicita um retorno de subresultados para valores dentro de uma determinada faceta

### Descrição

public function **SolrQuery::addStatsFacet**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Solicita um retorno de subresultados para valores dentro de uma determinada faceta. Maps para o campo stats.facet.

### Parâmetros

`field`
:   O nome do campo

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
