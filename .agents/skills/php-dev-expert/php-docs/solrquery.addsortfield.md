# Usado para controlar como os resultados devem ser classificados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addsortfield.php

---

# SolrQuery::addSortField

(PECL solr >= 0.9.2)

SolrQuery::addSortField — Usado para controlar como os resultados devem ser classificados

### Descrição

public function **SolrQuery::addSortField**([string](language.types.string.md) `$field`, [int](language.types.integer.md) `$order` = SolrQuery::ORDER\_DESC): [SolrQuery](class.solrquery.md)

Usado para controlar como os resultados devem ser classificados.

### Parâmetros

`field`
:   O nome do campo

`order`
:   A direção da classificação. Deve ser SolrQuery::ORDER\_ASC ou SolrQuery::ORDER\_DESC.

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
