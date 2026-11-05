# Especifica como classificar os termos retornados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermssort.php

---

# SolrQuery::setTermsSort

(PECL solr >= 0.9.2)

SolrQuery::setTermsSort — Especifica como classificar os termos retornados

### Descrição

public function **SolrQuery::setTermsSort**([int](language.types.integer.md) `$sortType`): [SolrQuery](class.solrquery.md)

Se SolrQuery::TERMS\_SORT\_COUNT, classifica os termos pela frequência do termo (contagem mais alta primeiro). Se SolrQuery::TERMS\_SORT\_INDEX, retorna os termos na ordem do índice.

### Parâmetros

`sortType`
:   SolrQuery::TERMS\_SORT\_INDEX ou SolrQuery::TERMS\_SORT\_COUNT

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
