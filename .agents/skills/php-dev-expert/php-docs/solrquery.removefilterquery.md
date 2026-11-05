# Remove uma consulta de filtro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.removefilterquery.php

---

# SolrQuery::removeFilterQuery

(PECL solr >= 0.9.2)

SolrQuery::removeFilterQuery — Remove uma consulta de filtro

### Descrição

public function **SolrQuery::removeFilterQuery**([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

Remove uma consulta de filtro.

### Parâmetros

`fq`
:   A consulta de filtro a ser removida

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
