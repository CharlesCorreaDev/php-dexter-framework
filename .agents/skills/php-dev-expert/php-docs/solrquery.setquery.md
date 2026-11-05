# Define a consulta de pesquisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setquery.php

---

# SolrQuery::setQuery

(PECL solr >= 0.9.2)

SolrQuery::setQuery — Define a consulta de pesquisa

### Descrição

public function **SolrQuery::setQuery**([string](language.types.string.md) `$query`): [SolrQuery](class.solrquery.md)

Define a consulta de pesquisa.

### Parâmetros

`query`
:   A consulta de pesquisa.

### Valor Retornado

Retorna o objeto SolrQuery atual.

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
