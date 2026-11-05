# Define a frequência abaixo da qual os termos serão ignorados nos documentos de origem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setmltmintermfrequency.php

---

# SolrQuery::setMltMinTermFrequency

(PECL solr >= 0.9.2)

SolrQuery::setMltMinTermFrequency — Define a frequência abaixo da qual os termos serão ignorados nos documentos de origem

### Descrição

public function **SolrQuery::setMltMinTermFrequency**([int](language.types.integer.md) `$minTermFrequency`): [SolrQuery](class.solrquery.md)

Define a frequência abaixo da qual os termos serão ignorados nos documentos de origem.

### Parâmetros

`minTermFrequency`
:   A frequência abaixo da qual os termos serão ignorados nos documentos de origem.

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
