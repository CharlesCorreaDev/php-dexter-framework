# Retorna todos os campos de faceta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getfacetfields.php

---

# SolrQuery::getFacetFields

(PECL solr >= 0.9.2)

SolrQuery::getFacetFields — Retorna todos os campos de faceta

### Descrição

public function **SolrQuery::getFacetFields**(): [array](language.types.array.md)

Retorna todos os campos de faceta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de todos os campos e **`null`** se nada foi definido.

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
