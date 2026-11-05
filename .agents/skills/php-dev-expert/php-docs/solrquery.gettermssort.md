# Retorna um número inteiro indicando como os termos são classificados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettermssort.php

---

# SolrQuery::getTermsSort

(PECL solr >= 0.9.2)

SolrQuery::getTermsSort — Retorna um número inteiro indicando como os termos são classificados

### Descrição

public function **SolrQuery::getTermsSort**(): [int](language.types.integer.md)

SolrQuery::TERMS\_SORT\_INDEX indica que os termos são retornados por ordem de índice. SolrQuery::TERMS\_SORT\_COUNT implica que os termos são classificados por frequência de termo (contagem mais alta primeiro)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um número inteiro em caso de sucesso e **`null`** se não estiver definido.

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
