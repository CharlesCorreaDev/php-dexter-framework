# Define a frequência mltMinDoc

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setmltmindocfrequency.php

---

# SolrQuery::setMltMinDocFrequency

(PECL solr >= 0.9.2)

SolrQuery::setMltMinDocFrequency — Define a frequência mltMinDoc

### Descrição

public function **SolrQuery::setMltMinDocFrequency**([int](language.types.integer.md) `$minDocFrequency`): [SolrQuery](class.solrquery.md)

A frequência com que as palavras serão ignoradas e que não ocorrem pelo menos neste número de documentos.

### Parâmetros

`minDocFrequency`
:   Define a frequência com que as palavras serão ignoradas e que não ocorrem pelo menos neste número de documentos.

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
